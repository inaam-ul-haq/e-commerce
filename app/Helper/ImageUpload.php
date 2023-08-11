<?php

namespace App\Helper;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageUpload
{
    public function uploadImage($file, $filePath)
    {
        $name = Str::random(4) . '_' . $file->getClientOriginalName();
        $path = $filePath . '' . $name;
        Storage::disk('public')->put($path, File::get($file));

        return [
            'name' => $name,
            'path' => $path,
        ];
    }
}
