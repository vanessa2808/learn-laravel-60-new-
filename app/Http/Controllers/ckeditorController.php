<?php
<p>namespace App\Http\Controllers;</p>
<p>use Illuminate\Http\Request;</p>
<p>class CkeditorController extends Controller
{
/**
* success response method.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
return view(‘ckeditor’);
}</p>
<pre><code>/**
 * success response method.
 *
 * @return \Illuminate\Http\Response
 */
public function upload(Request $request)
{
    if($request-&gt;hasFile('upload')) {
        $originName = $request-&gt;file('upload')-&gt;getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request-&gt;file('upload')-&gt;getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
    
        $request-&gt;file('upload')-&gt;move(public_path('images'), $fileName);

        $CKEditorFuncNum = $request-&gt;input('CKEditorFuncNum');
        $url = asset('images/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "&lt;script&gt;window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')&lt;/script&gt;";
           
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }
}
</code>