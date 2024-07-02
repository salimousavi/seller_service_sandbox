<?php

namespace App\Mock\Auth;

use App\Mock\AMock;

class ScopeMockData extends AMock
{
    const ITEMS = [
        [
            "key" => "variant",
            "title" => "مدیریت تنوع و قیمت‌گذاری",
            "description" => "امکان مشاهده و ویرایش اطلاعات مدیریت تنوع و قیمت‌گذاری پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "order",
            "title" => "مدیریت سفارشات جاری",
            "description" => "امکان مشاهده و ویرایش اطلاعات مدیریت سفارشات جاری پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "inventory",
            "title" => "موجودی کالا",
            "description" => "امکان مشاهده و ویرایش اطلاعات موجودی کالا پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "profile",
            "title" => "پروفایل",
            "description" => "امکان مشاهده و ویرایش اطلاعات پروفایل پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "insight",
            "title" => "تحلیل عملکرد (فروش و درآمد)",
            "description" => "امکان مشاهده و ویرایش اطلاعات تحلیل عملکرد (فروش و درآمد) پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "growth_coach",
            "title" => "تحلیل عملکرد (مرجوعی)",
            "description" => "امکان مشاهده و ویرایش اطلاعات تحلیل عملکرد (مرجوعی) پنل شما را خواهد داشت",
            "access" => "write",
        ],
        [
            "key" => "question",
            "title" => "پرسش‌های کاربران",
            "description" => "امکان مشاهده و ویرایش اطلاعات پرسش‌های کاربران پنل شما را خواهد داشت",
            "access" => "write",
        ],
    ];
}