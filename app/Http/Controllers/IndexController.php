<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    const START_DATE = '23.02.2023';
    const DAY_AND_MONTH_BIRTHDAY = '29-03';

    public function index()
    {
        return view('index')->with([
            'daysTogether' => $this->getDaysTogether(),
            'isBirthdayLera' => $this->isBirthdayLera(),
            'startDate' => self::START_DATE
        ]);
    }

    public function getDaysTogether(): int
    {
        $startDate = date_create(self::START_DATE);
        $endDate = date_create(now());
        $daysTogether = date_diff($startDate, $endDate);

        return $daysTogether->days;
    }

    public function isBirthdayLera(): bool
    {
        $nowDayAndMonth = date('d-m');
        $birthdayAndMonth = self::DAY_AND_MONTH_BIRTHDAY;

        return $nowDayAndMonth === $birthdayAndMonth;
    }
}
