<?php

namespace App\Http\Controllers;

use App\Http\Requests\BedSpaceRequest;
use App\Http\Requests\FlatRequest;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function bedSpaceList()
    {
        $bedSpaces = DB::table('bed_space')->get();
        return view('admin.bedSpaceList')->with('bedSpaces', $bedSpaces);
    }

    public function addBedSpace()
    {
        return view('admin.addBedSpace');
    }

    public function insertBedSpace(BedSpaceRequest $req)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/bed_spaces/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();


        DB::table('bed_space')->insert(
            [
                'title' => $req->title,
                'rent' => $req->rent,
                'location' => $req->location,
                'dimention' => $req->dimention,
                'pillows' => $req->pillows,
                'bed_sheet' => $req->bed_sheet,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.bedSpaceList');
    }

    public function editBedSpace($id)
    {
        $bedSpace = DB::table('bed_space')->where('id', $id)->first();

        return view('admin.editBedSpace')->with('bedSpace', $bedSpace);
    }

    public function updateBedSpace(BedSpaceRequest $req, $id)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/bed_spaces/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();

        DB::table('bed_space')->where('id', $id)->update(
            [
                'title' => $req->title,
                'rent' => $req->rent,
                'location' => $req->location,
                'dimention' => $req->dimention,
                'pillows' => $req->pillows,
                'bed_sheet' => $req->bed_sheet,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.bedSpaceList');
    }

    public function deleteBedSpace($id)
    {
        DB::table('bed_space')->where('id', $id)->delete();
        return redirect()->route('product.bedSpaceList');
    }




    public function roomList()
    {
        $rooms = DB::table('room')->get();
        return view('admin.roomList')->with('rooms', $rooms);
    }

    public function addRoom()
    {
        return view('admin.addRoom');
    }

    public function insertRoom(RoomRequest $req)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/rooms/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();

        DB::table('room')->insert(
            [
                'location' => $req->location,
                'rent' => $req->rent,
                'dimention' => $req->dimention,
                'washroom' => $req->washroom,
                'bed' => $req->bed,
                'ac' => $req->ac,
                'electricity' => $req->electricity,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.roomList');
    }

    public function editRoom($id)
    {
        $room = DB::table('room')->where('id', $id)->first();

        return view('admin.editRoom')->with('room', $room);
    }

    public function updateRoom(RoomRequest $req, $id)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/rooms/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();

        DB::table('room')->where('id', $id)->update(
            [
                'location' => $req->location,
                'rent' => $req->rent,
                'dimention' => $req->dimention,
                'washroom' => $req->washroom,
                'bed' => $req->bed,
                'ac' => $req->ac,
                'electricity' => $req->electricity,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.roomList');
    }

    public function deleteRoom($id)
    {
        DB::table('room')->where('id', $id)->delete();
        return redirect()->route('product.roomList');
    }




    public function flatList()
    {
        $flats = DB::table('flat')->get();
        return view('admin.flatList')->with('flats', $flats);
    }

    public function addflat()
    {
        return view('admin.addflat');
    }

    public function insertFlat(FlatRequest $req)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/flats/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();

        DB::table('flat')->insert(
            [
                'location' => $req->location,
                'rent' => $req->rent,
                'washroom' => $req->washroom,
                'bed' => $req->bed,
                'dimention' => $req->dimention,
                'room' => $req->room,
                'ac' => $req->ac,
                'electricity' => $req->electricity,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.flatList');
    }

    public function editFlat($id)
    {
        $flat = DB::table('flat')->where('id', $id)->first();

        return view('admin.editFlat')->with('flat', $flat);
    }

    public function updateFlat(FlatRequest $req, $id)
    {
        $img1Name = time() . '-1' . '.' . $req->image_1->getClientOriginalExtension();
        $path = 'images/flats/';

        $img2Name = time() . '-2' . '.' . $req->image_2->getClientOriginalExtension();
        $img3Name = time() . '-3' . '.' . $req->image_3->getClientOriginalExtension();

        DB::table('flat')->where('id', $id)->update(
            [
                'location' => $req->location,
                'rent' => $req->rent,
                'washroom' => $req->washroom,
                'bed' => $req->bed,
                'dimention' => $req->dimention,
                'room' => $req->room,
                'ac' => $req->ac,
                'electricity' => $req->electricity,
                'phone' => $req->phone,
                'email' => $req->email,
                'image_1' => $path . $img1Name,
                'image_2' => $path . $img2Name,
                'image_3' => $path . $img3Name,
            ]
        );
        $req->image_1->move($path, $img1Name);
        $req->image_2->move($path, $img2Name);
        $req->image_3->move($path, $img3Name);
        return redirect()->route('product.flatList');
    }

    public function deleteFlat($id)
    {
        DB::table('flat')->where('id', $id)->delete();
        return redirect()->route('product.flatList');
    }
}
