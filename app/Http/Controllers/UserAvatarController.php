<?php

namespace App\Http\Controllers;

use App\Http\Uploads\HandlesImagesUploads;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    use HandlesImagesUploads;

    public function store(Request $request)
    {
        //TODO validation
        $uploaded_image = $request->file('avatar');
        $path = $this->resizeAndSave($uploaded_image);

        return  $path;
    }
}
