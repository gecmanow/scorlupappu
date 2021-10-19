<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function certRequest(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('certRequest');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function priceRequest(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'email.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'company' => 'Компания',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('priceRequest');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $company = $request->input('company');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone, 'email' => $email, 'company' => $company);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function commonQuestion(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('commonQuestion');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function order(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'city' => 'nullable',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('order');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone, 'city' => $city);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function weightCalc(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'diameter' => 'nullable',
            'weight' => 'nullable',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('weightCalc');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $diameter = $request->input('diameter');
        $weight = $request->input('weight');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone, 'diameter' => $diameter, 'weight' => $weight);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }

    public function callback(Request $request)
    {
        $rules = [
            'name' => 'required|max:30',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.required' => 'Поле :attribute обязательно для заполнения.',
            'g-recaptcha-response.captcha' => 'Вы не прошли проверку :attribute.',
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'g-recaptcha-response' => 'reCaptcha'
        ])->validateWithBag('callback');

        $name = $request->input('name');
        $phone = $request->input('phone');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'phone' => $phone);
        Mail::send('public.email.email', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        return redirect()->route('home');
    }
}
