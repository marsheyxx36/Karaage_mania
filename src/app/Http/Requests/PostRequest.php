<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'post'){
            return true;
        }else{
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           
                'store_name'=>'required',
                'area'=> 'required',
                'address'=> 'required',
                'type'=> 'required',
                'comment'=> 'required',
                'item'=> 'required',
                'image'=> 'required',
        ];
    }

    public function messages(){
        return[
            'store_name.required' => '店舗名は必ず記入してください',
            'area.required' => '地域はは必ず選択してください',
            'address.required' => '住所は必ず記入してください',
            'type.required' => '唐揚げのタイプは必ず記入してください',
            'comment.required' => 'コメントは必ず記入してください',
            'item.required' => '商品名は必ず記入してください',
            'image.required' => '画像を選択してください',
        ];
    }
}
