<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CrudUsers;

class UsersController extends Controller
{    

    /**
     * ユーザーリポジトリ
     * 
     * @var UserRepository
     */
    protected $users;


   /**
    * ユーザー一覧
    *
    * @param Request $request
    * @return Response
    */

    public function index()
    {
        $users = CrudUsers::orderBy('id', 'asc')->get();
        
        return view('users.index', [
            'users' => $users,
        ]);
    }

    /**
     * ユーザー登録
     *
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
 
       // ユーザー作成
        CrudUsers::create([
           'id' => $request->id,
           'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email
        ]);

        return redirect('/users');
    }   
    
    public function edit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
       // ユーザー更新
        CrudUsers::where('id', $request->id)
        ->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        
        return redirect('/users');
    }
    
    /**
     * ユーザー削除
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function destroy(Request $request, CrudUsers $user)
    {

        $user->delete();
        return redirect('/users');
    }

    public function moveregister(Request $request)
    {
        return View('/CRUD/register');
    }

    public function moveedit(int $id)
    {
        $user = CrudUsers::find($id);
        return view('CRUD.edit', [
            'user' => $user,
        ]);
    }
}
