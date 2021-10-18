<?php

class MathService
{
    // TODO
    // Metody budou staticke.. NEMUSI BYT
    // $isOdd = MathService::IsOdd(2)
    // $factorial = MathService::Factorial(5);

    // metoda na vypocet faktorialu
    // n = 5 .. 5! = 5 * 4 * 3 * 2 * 1
    // n je do kolika faktorial pocitam
    static function Factorial($n)
    {
        $cislo = 1;

        for ($i = 2; $i <= $n; $i++) {
            $cislo *= $i;
        }

        return $cislo;
    }

    // metoda zda je cislo liche
    static function Odd($number)
    {
        return $number % 2 != 0;
    }

    // metoda zda je cislo sude
    static function Even($number)
    {
        return !MathService::Odd($number);
    }

    // metoda, ktera vypise fibonaciho posloupnost do cisla N
    // upperBoundary = 20 - 1 1 2 3 5 8 13 
    static function FibSequence($upperBoundary)
    {
        $numbers = array(1, 1);

        while ($numbers[count($numbers) - 1] + $numbers[count($numbers) - 2] < $upperBoundary) {
            $numbers[] = $numbers[count($numbers) - 1] + $numbers[count($numbers) - 2];
        }

        return $numbers;
    }

    // metoda dostane pole cisel a vrati jejich soucet
    // [2, 3, 5, -1] -> 9
    static function Sum($array)
    {
        $sum = 0;

        for ($i = 0; $i < count($array); $i++) {
            $sum += $array[$i];
        }

        return $sum;
    }

    // return MAX, MIN, AVG of array
    static function MathArrayAna($numbers)
    {
        return new MathAnaResult(MathService::Avg($numbers), MathService::Min($numbers), MathService::Max($numbers));
    }

    static function Min($numbers)
    {
        $min = $numbers[0];

        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] < $min) {
                $min = $numbers[$i];
            }
        }

        return $min;
    }

    static function Max($numbers)
    {
        $max = $numbers[0];

        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] > $max) {
                $max = $numbers[$i];
            }
        }

        return $max;
    }

    static function Avg($numbers)
    {
        return MathService::Sum($numbers) / count($numbers);
    }
    // metoda dostane pole cisel a vrati matematickou analyzu
    // vrati to OBJEKT, ktery obsahuje MIN, MAX, AVG

    // metoda co vrati MIN, metoda co vrati MAX, metoda co vrati AVG, parametr pole
}
