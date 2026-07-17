<?php

namespace App\Http\Controllers;

class SeoPageController extends Controller
{
    public function studyAbroad()
    {
        return view('pages.seo.study-abroad');
    }

    public function scholarships()
    {
        return view('pages.seo.scholarships');
    }

    public function languageTraining()
    {
        return view('pages.seo.language-training');
    }

    public function aiAutomation()
    {
        return view('pages.seo.ai-automation');
    }

    public function cloudComputing()
    {
        return view('pages.seo.cloud-computing');
    }

    public function softwareDevelopment()
    {
        return view('pages.seo.software-development');
    }

    public function privacyPolicy()
    {
        return view('pages.seo.privacy-policy');
    }

    public function termsOfService()
    {
        return view('pages.seo.terms-of-service');
    }
}
