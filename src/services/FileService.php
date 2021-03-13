<?php
namespace Tecnolaw\File\Services;

class FileService
{

	function __construct() {
	}
	public function downloaded($url,$floder='',$off=false)
	{
		// Use basename() function to return the base name of file
		$file_name = basename($url);

		$path = storage_path('files'.DIRECTORY_SEPARATOR.$floder);

		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}
		$full=$path.DIRECTORY_SEPARATOR.$file_name;

		if (file_exists($full)) {
			$string = $full;
			$substr = '.';
			$attachment = '_'.strtotime("now").'_'.bin2hex(random_bytes(2));
			$full=str_replace($substr, $attachment.$substr, $string);
		}
		$partils=explode('/', $full);
		$file_name2=end($partils);
		try {
			if($off){
				return [
					'name'=>$file_name2,
					'name_original'=>$file_name,
					'folder_path'=>$floder,
					'mime_type'=>null,
				];
			}else{

				if(file_put_contents($full,file_get_contents($url))) {
					echo "File ".$file_name." downloaded successfully \n";
					return [
						'name'=>$file_name2,
						'name_original'=>$file_name,
						'folder_path'=>$floder,
						'mime_type'=>null,
					];
				} else {
					echo "File ".$file_name." downloading failed.  \n";
					return null;
				}
			}
		} catch (\Exception $e) {
			echo $e->getMessage()."  \n";
			return null;
		}
	}
}
