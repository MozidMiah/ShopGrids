<?php

function getImageUrl($request, $fieldName, $path)
{
    if (!$request->hasFile($fieldName)) {
        return null;
    }

    $file = $request->file($fieldName);
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path($path), $fileName);

    return $path . $fileName;
}
