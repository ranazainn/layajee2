<?php

use Illuminate\Http\Request;

function getImage($file)
{
              
        if ($file->isValid()) {
    
            $data['doc_ext'] = $file->extension();
            $data['doc_name']=time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/public', $data['doc_name']);
            $data['doc_path']= url('/storage',$data['doc_name']);
                    
        }
    

    return $data;
}
function getUserImage($f)
{
        if ($f->isValid()) {
    
            $data['image_name']=time() . '.' . $f->getClientOriginalExtension();
            $data['img_ext'] = $f->extension();
            $f->storeAs('/public', $data['image_name']);
            $data['img_path']= url('/storage',$data['image_name']);
                    
        }
    

    return $data;
   
}