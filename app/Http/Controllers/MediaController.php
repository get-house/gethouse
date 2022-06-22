<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $file = request()->file('file');
        $file->store('properties/' . request()->user()->id . '/' . now()->format('Y') . '/' . now()->format('m'), 'public');

        $media = Media::create([
            'file_name' => $file->hashName(),
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'user_id' => request()->user()->id,
        ]);

        return response()->json([
            'id' => $media->id,

        ]);
    }

    //create a destroy method that takes in the media model
    public function destroy(Media $media)
    {
        Storage::disk('public')
            ->delete('properties/' . $media->user_id . '/' . now()->format('Y') . '/' . now()->format('m') . '/' . $media->file_name);

        $media->delete();

        return response()->json(['message' => 'Media deleted successfully']);
    }
}
