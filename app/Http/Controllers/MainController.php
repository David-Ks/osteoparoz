<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Service;//YES
use App\Social;//YES
use App\Team; //YES
use App\Setting; //YES
use App\News; //YES
use App\Video; //YES
use App\Contact; //YES
use App\Gallery; //YES
use App\Team_type; //YES
use App\News_type; //YES
use App\Service_type; //YES


class MainController extends Controller
{
    public function upload($image,$path)
    {
        $image_name = time() . $image->getClientOriginalName();
        $image->move(public_path($path), $image_name);
        $image_path = "/" . $path . $image_name;
        return $image_path;
    }
    
    public function trash($image)
    {  
        if(file_exists(public_path($image))) {
            unlink(public_path($image));
        } 
    }

    public function home()
    {
        $components = array(
            "servicesDiagnostic" => Service::orderBy('id', 'desc')->where("service_type_id", 1)->take(2)->get(),
            "servicesKhorurd"    => Service::orderBy('id', 'desc')->where("service_type_id", 2)->take(2)->get(),
            "socials"            => Social::orderBy('id', 'desc')->take(2)->get(),
            "teamDoc"            => Team::orderBy('id', 'desc')->where('team_type_id', 1)->take(2)->get(),
            "teamVarch"          => Team::orderBy('id', 'desc')->where('team_type_id', 2)->take(2)->get(),
            "settings"           => Setting::all(),
            "newsForDoc"         => News::orderBy('id', 'desc')->where('news_type_id', 1)->take(3)->get(),
            "newsForNur"         => News::orderBy('id', 'desc')->where('news_type_id', 2)->take(3)->get(),
            "newsForPatient"     => News::orderBy('id', 'desc')->where('news_type_id', 3)->take(4)->get(),
            "newsForEdu"         => News::orderBy('id', 'desc')->where('news_type_id', 4)->take(3)->get(),
            "videos"             => Video::orderBy('id', 'desc')->take(6)->get(),
            "contacts"           => Contact::all()->first(),
            "gallery"            => Gallery::orderBy('id', 'desc')->take(10)->get(),
        );

        return view('home', $components);
    }

    public function adminPanel() {
        $components = array(
            "services"     => Service::all(),
            "service_type" => Service_type::all(),
            "socials"      => Social::all(),
            "teams"        => Team::all(),
            "team_types"   => Team_type::all(),
            "settings"     => Setting::all(),
            "news"         => News::all(),
            "news_types"   => News_type::all(),
            "videos"       => Video::all(),
            "contacts"     => Contact::all()->first(),
            "gallery"      => Gallery::all(),
        );
        return view('adpanel', $components);
    }

    public function changeContacts(Request $request) {
        $contact = Contact::all()->first();
        $contact->fill($request->all())->save();
        return redirect()->route('adpanel');
    }

    public function createTeam(Request $request) {
        $team = new Team;
        $team->fill($request->except('img'))->save();

        if($request->file('img')){
            $team->img = $this->upload($request->file('img'),'images/team/');
        }

        $team->save();
        return redirect()->route('adpanel');
    }

    public function changeteam(Request $request, $id) {
        $team = Team::find($id);
        $team->fill($request->except('img'))->save();;

        if($request->file('img')) {
            $this->trash($team->img);
            $team->img = $this->upload($request->file('img'),'images/team/');
            $team->save();
        }
        return redirect()->route('adpanel');
    }

    public function delteam($id) {
        $team = Team::find($id);
        $this->trash($team->img);
        $team->delete();
        return redirect()->route('adpanel');
    }

    public function changenews(Request $request, $id) {
        $news = News::find($id);
        $news->fill($request->except('img'))->save();;

        if($request->file('img')) {
            $this->trash($news->img);
            $news->img = $this->upload($request->file('img'),'images/news/');
            $news->save();
        }
        return redirect()->route('adpanel');
    }

    public function delnews($id) {
        $news = News::find($id);
        $this->trash($news->img);
        $news->delete();
        return redirect()->route('adpanel');
    }

    public function createnews(Request $request) {
        $news = new News;
        $news->fill($request->except('img'))->save();

        if($request->file('img')){
            $news->img = $this->upload($request->file('img'),'images/news/');
        }

        $news->save();
        return redirect()->route('adpanel');
    }

    public function createservice(Request $request) {
        $service = new Service;
        $service->fill($request->except('img'))->save();

        if($request->file('img')){
            $service->img = $this->upload($request->file('img'),'images/service/');
        }

        $service->save();
        return redirect()->route('adpanel');
    }

    public function delservice($id) {
        $service = Service::find($id);
        $this->trash($service->img);
        $service->delete();
        return redirect()->route('adpanel');
    }

    public function changeservice(Request $request, $id) {
        $service = Service::find($id);
        $service->fill($request->except('img'))->save();;

        if($request->file('img')) {
            $this->trash($service->img);
            $service->img = $this->upload($request->file('img'),'images/service/');
            $service->save();
        }
        return redirect()->route('adpanel');
    }

    public function creategallery(Request $request) {
        $gal = new Gallery;

        if($request->file('img')){
            $gal->img = $this->upload($request->file('img'),'images/gallery/');
            $gal->save();
        }
        return redirect()->route('adpanel');
    }

    public function delgallery($id) {
        $gal = Gallery::find($id);
        $this->trash($gal->img);
        $gal->delete();
        return redirect()->route('adpanel');
    }

    public function changevideo(Request $request, $id) {
        $video = Video::find($id);
        $video->fill($request->all())->save();
        return redirect()->route('adpanel');
    }

    public function delvideo($id) {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('adpanel');
    }

    public function createvideo(Request $request) {
        $video = Video::create($request->all());
        return redirect()->route('adpanel');
    }

    public function changesettings(Request $request) {
        $setting = Setting::find($request->block_id);
        $setting->text = $request->text;
        $setting->save();
        return redirect()->route('adpanel');
    }

    public function changesocial(Request $request, $id) {
        $social = Social::find($id);
        $social->fill($request->except('icon'))->save();;

        if($request->file('icon')) {
            $this->trash($social->icon);
            $social->icon = $this->upload($request->file('icon'),'images/social/');
            $social->save();
        }
        return redirect()->route('adpanel');
    }

    public function delsocial($id) {
        $social = Social::find($id);
        $this->trash($social->icon);
        $social->delete();
        return redirect()->route('adpanel');
    }

    public function createsocial(Request $request) {
        $social = new Social;
        $social->fill($request->except('icon'))->save();
        
        if($request->file('icon')){
            $social->icon = $this->upload($request->file('icon'),'images/social/');
            $social->save();
        }
        return redirect()->route('adpanel');
    }
}