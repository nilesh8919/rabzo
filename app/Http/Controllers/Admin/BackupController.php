<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use Artisan;
use DB;
use App\Package;
use App\Cuisine;
use App\Review;
use App\DeliveryBoy;
use Storage;
//use Alert;
use Log;
use ZipArchive;
use Carbon\Carbon;

class BackupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
  
    public function database_backup(Request $request)
      {
         $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
		
        $files = $disk->files(config('laravel-backup.backup.name'));
		 //print_r(config('laravel-backup.backup.name'));exit;
		// print_r($files);exit;
        $backups = [];
        // make an array of backup files, with their filesize and creation date
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(config('laravel-backup.backup.name') . '/', '', $f),
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        return view("admin.database_backup")->with(compact('backups'));
		
         /*   $data =DB::table('backups')->where('backup_type','database')->orderby('id','desc')
				->get();
				
			
              return view('admin.database_backup',[
                'results'=> $data,
				
                 ]);*/
      }
	  public function image_backup(Request $request)
      {
         
		 
		 
            $data =DB::table('backups')->where('backup_type','database')->orderby('id','desc')
				->get();
				
			
              return view('admin.image_backup',[
                'results'=> $data,
				
                 ]);
      }
	    public function get_database_backup(Request $request)
		{
					try {
				// start the backup process
				Artisan::call('backup:run', ['--only-db' => 'true']);
				$output = Artisan::output();
				// log the results
			//	print_r($output);exit;
				Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
				// return the results as a response to the ajax call
			//	Alert::success('New backup created');
				return redirect()->back();
			} catch (Exception $e) {
				Flash::error($e->getMessage());
				return redirect()->back();
			}
			
					/* $filename = Carbon::now()->format('Y-m-d-H-i-s');

				$tempPath = base_path('storage\app\backup-temp\\') . $filename;
				$backPath = base_path('storage\app\backups\\') . $filename;

				$command = 'mysqldump -u root --password= db_rabzo1 > ' . $tempPath . '.sql';
				exec($command);

				// zipping 
				$zip = new ZipArchive;
				if ($zip->open($backPath . '.zip', ZipArchive::CREATE) === TRUE) {
					$zip->addFile($tempPath . '.sql', $filename . '.sql');
					$zip->close();
				}

				// clear temp folder
				$this->clearTempFolder();*/

		}
		private function clearTempFolder()
    {
        //The name of the folder.
        $folder = base_path('storage\app\backup-temp\\');

        //Get a list of all of the file names in the folder.
        $files = glob($folder . '/*');

        //Loop through the file list.
        foreach ($files as $file) {
            //Make sure that this is a file and not a directory.
            if (is_file($file)) {
                //Use the unlink function to delete the file.
                unlink($file);
            }
        }
    }

	    public function index()
    {
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        $files = $disk->files(config('laravel-backup.backup.name'));
        $backups = [];
        // make an array of backup files, with their filesize and creation date
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(config('laravel-backup.backup.name') . '/', '', $f),
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        return view("backup.backups")->with(compact('backups'));
    }
    public function create()
    {
        try {
            // start the backup process
            Artisan::call('backup:run');
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
            // return the results as a response to the ajax call
            Alert::success('New backup created');
            return redirect()->back();
        } catch (Exception $e) {
            Flash::error($e->getMessage());
            return redirect()->back();
        }
    }
    /**
     * Downloads a backup zip file.
     *
     * TODO: make it work no matter the flysystem driver (S3 Bucket, etc).
     */
    public function download($file_name)
    {
        $file = config('laravel-backup.backup.name') . '/' . $file_name;
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs = Storage::disk(config('laravel-backup.backup.destination.disks')[0])->getDriver();
            $stream = $fs->readStream($file);
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }
    /**
     * Deletes a backup file.
     */
    public function delete($file_name)
    {
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        if ($disk->exists(config('laravel-backup.backup.name') . '/' . $file_name)) {
            $disk->delete(config('laravel-backup.backup.name') . '/' . $file_name);
            return redirect()->back();
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }
    

}
