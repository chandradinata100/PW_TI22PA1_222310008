<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function index(Member $member)
    {
        return view('member.modules.identity.index', [
            "data" => $member->paginate(5)
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|max:30',
            "name" => "required|max:100",
            "address" => "required",
            "birthdate" => "required",
            "gender" => "required",
            "phone" => "required|max:15"
        ]);

        Member::create($validateData);

        return redirect('/')->with('success', "Data sukses disimpan");
    }

    public function edit(Member $member)
    {
        return view('member.modules.identity.edit', [
            "member" => $member
        ]);
    }

    public function update(Request $request, Member $member)
    {
        $validateData = $request->validate([
            'email' => 'required|max:30',
            "name" => "required|max:100",
            "address" => "required",
            "birthdate" => "required",
            "gender" => "required",
            "phone" => "required|max:15"
        ]);

        $member->where("id", $member->id)->update($validateData);

        return redirect('/')->with('success', 'Data sukses diupdate!');
    }

    public function destroy(Member $member)
    {
        $member->delete($member->id);

        return redirect('/')->with('success', "Data sukses dihapus");
    }

    public function getDataByID(Member $member)
    {
        return view('member.modules.identity.show', [
            "data" => $member
        ]);
    }
}
