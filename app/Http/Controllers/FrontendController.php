<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\AboutPage;
use App\Models\Portfolio;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\OurPortfolio;
use Illuminate\Http\Request;
use App\Models\MultipleBusinessBrand;
use App\Models\PortfolioMultipleImage;
use App\Models\WhyChooseFexdver;

class FrontendController extends Controller
{

    public function welcomeViewPage(){

        $banner_info = Banner::where('status' , 1)->first();
        $about_info = AboutUs::where('status' , 1)->first();
        $service_info = Service::all();
        $project_info = Portfolio::all();
        $brand_info = MultipleBusinessBrand::all();
        $teamMembers_info = TeamMember::Latest()->get();
        $testimonials_info = Testimonial::Latest()->get();

        return view('welcome' , [
            'banner_info' => $banner_info,
            'about_info' => $about_info,
            'service_info' => $service_info,
            'project_info' => $project_info,
            'brand_info' => $brand_info,
            'teamMembers_info' => $teamMembers_info,
            'testimonials_info' => $testimonials_info,
        ]);
    }

    public function aboutViewPage(){
        $about_info = AboutPage::where('status' , 1)->get();
        $about_description = AboutUs::where('status' , 1)->first();
        return view('frontend.about', [
            'about_info' => $about_info,
            'about_description' => $about_description,
        ]);
    }

    public function contactViewPage(){
        return view('frontend.contact');
    }

    public function servicesViewPage(){
        $whychoosefanatech = WhyChooseFexdver::all();
        $about_info = AboutUs::where('status' , 1)->first();
        $service_info = Service::all();

        return view('frontend.services' , [
            'about_info' => $about_info,
            'service_info' => $service_info,
            'whychoosefanatech' => $whychoosefanatech,
        ]);
    }

    public function portfolioViewPage(){
        return view('frontend.portfolio' , [
            'ourPortfolios_all' => OurPortfolio::Latest()->get()
        ]);
    }

    public function portfolioDetailsViewPage($id){
        $multiple_big_img = PortfolioMultipleImage::where('portfolio_id',$id)->first();
        $big_img = $multiple_big_img->portfolio_multiple_photo;

        return view('frontend.portfolio_details' , [
            'portfolio_details' => Portfolio::findOrFail($id),
            'big_img' => $big_img,
        ]);

    }

    public function teamDetailsViewPage($id){
        return view('frontend.team_details' , [
            'team_details' => TeamMember::findOrFail($id),
        ]);
    }



}
