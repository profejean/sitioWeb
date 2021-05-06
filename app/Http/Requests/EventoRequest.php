<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "pdf"         => "mimes:pdf|max:10000",
            "resumen_img" => "mimes:jpg,png,bmp,jpeg",
            "video"       => "mimes:mp4",
        ];
    }

    public function messages()
    {
        return [

            'pdf.mimes'         => 'Enviar archivo del tipo pdf.',
            'pdf.max'           => 'Máximo 10.000 lineas.',
            'resumen_img.mimes' => 'Enviar archivo del tipo imagen (jpg, png, bmp, jpeg).',
            'video.mimes'       => 'Enviar archivo de video de tipo MP4.',
        ];
    }
}
