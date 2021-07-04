<?php
namespace App\Helpers;
/**upload a file
 * @param file 
 * @param file name
 * @param where store that file
 * @return file name
 * 
 * 
 * 
 */
class UploadHelper{
    public static function upload($file,$fileName,$targetLocation)
    {
        if(!is_null($file)){
        $extension=$file->getClientOriginalExtension();
        $fileName.=".".$extension;
        $file->move($targetLocation,$fileName);
        return $fileName;
        }
        return null;
    }
}