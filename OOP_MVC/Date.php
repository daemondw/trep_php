<?php
class Date
{
    public function __construct($date = null)
    {
        $this->date = $date;

        // если дата не передана - пусть берется текущая
        if (is_null($this->date)) {
            $this->date = date('Y-m-d');
        }
    }

    public function getDay()
    {
        return date('d');// возвращает день
    }

    public function getMonth($lang = null)
    {
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        if (!is_null($lang)) {
            $month = date('m');
            if ($lang == 'ru') {
                switch ((int)$month) {
                    case '1':
                        return 'Январь';
                        break;
                    case '2':
                        return 'Февраль';
                        break;
                    case '3':
                        return 'Март';
                        break;
                    case '4':
                        return 'Апрель';
                        break;
                    case '5':
                        return 'Май';
                        break;
                    case '6':
                        return 'Июнь';
                        break;
                    case '7':
                        return 'Июль';
                        break;
                    case '8':
                        return 'Август';
                        break;
                    case '9':
                        return 'Сентябрь';
                        break;
                    case '10':
                        return 'Октябрь';
                        break;
                    case '11':
                        return 'Ноябрь';
                        break;
                    case '12':
                        return 'Декабрь';
                        break;
                }
            } else {
                switch ((int)$month) {
                    case '1':
                        return 'January';
                        break;
                    case '2':
                        return 'February';
                        break;
                    case '3':
                        return 'March';
                        break;
                    case '4':
                        return 'April';
                        break;
                    case '5':
                        return 'May';
                        break;
                    case '6':
                        return 'June';
                        break;
                    case '7':
                        return 'July';
                        break;
                    case '8':
                        return 'August';
                        break;
                    case '9':
                        return 'September';
                        break;
                    case '10':
                        return 'October';
                        break;
                    case '11':
                        return 'November';
                        break;
                    case '12':
                        return 'December';
                        break;
                }
            }
        }
    }

    public function getYear()
    {
        // возвращает год
        return date('Y');
    }

    public function getWeekDay($lang = null)
    {
        // возвращает день недели

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке

        if (!is_null($lang)) {
            $days = ['Mon'=>'Пон', 'Tue'=>'Вт', 'Wed'=>'Ср', 'Thu'=>'Чт', 'Fri'=>'Пт', 'Sat'=>'Сб', 'Sun'=>'Вс'];
            if ($lang == 'ru') {
                return $days[date('D')];
            } else {
                return date('D');
            }
        }
    }

    public function addDay($value)
    {
        // добавляет значение $value к дню
    }

    public function subDay($value)
    {
        // отнимает значение $value от дня
    }

    public function addMonth($value)
    {
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        // добавляет значение $value к году
    }

    public function subYear($value)
    {
        // отнимает значение $value от года
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
    }

    public function __toString()
    {
       return $this->date; // выведет дату в формате 'год-месяц-день'
    }
}