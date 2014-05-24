<!-- find file in folder ------------------------------------------------------------->
if(is_dir($dirname."/vote"))
    			$this->rmdir_recursive($dirname.'/vote');

function rmdir_recursive($dir) {
        foreach(scandir($dir) as $file) {           //find file in folder.
            if ('.' === $file || '..' === $file) 
                continue;
            if (is_dir("$dir/$file")) 
                $this->rmdir_recursive("$dir/$file");
            else 
                unlink("$dir/$file");
        }
        rmdir($dir);
    }