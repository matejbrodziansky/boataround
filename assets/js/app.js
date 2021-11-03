
// ************** function is prime number ? **********

function isPrimeNumber(x) {
    var pr;
    if (x == 2)
        pr = true;
    else
        pr = (x % 2 != 0);
    var n = 3;
    while ((n <= Math.sqrt(x)) && pr)
        if (x % n == 0)
            pr = false;
        else
            n = n + 2;
    return pr;
}

function test(f) {
    if (isPrimeNumber(parseInt(f.number.value)))
        f.resp.value = "Yes";
    else
        f.resp.value = "NO";
}


// ************** Decompose number **********

(function ($) {


    function isPrimeNumber(x) {
        var pr;
        if (x == 2)
            pr = true;
        else
            pr = (x % 2 != 0);
        var n = 3;
        while ((n <= Math.sqrt(x)) && pr)
            if (x % n == 0)
                pr = false;
            else
                n = n + 2;
        return pr;
    }

    function test(f) {
        if (isPrimeNumber(parseInt(f.number.value)))
            f.resp.value = "Yes";
        else
            f.resp.value = "NO";
    }

    //-------------------------------------------------------------

    function isPrime(num) {
        for (let i = 2; i * i <= num; i++)
            if (num % i === 0)
                return false;
        return num > 1;
    }

    let print_all_sum_rec = function (target, current_sum, start, result, output) {
        if (current_sum === target) {
            output.push(result.slice());
        }

        for (let i = start; i < target; i++) {
            let temp_sum = current_sum + i;
            if (temp_sum <= target) {

                result.push(i);

                print_all_sum_rec(target, temp_sum, i, result, output);
                result.pop();

            } else {
                return;
            }
        }

    };
    let print_all_sum = function (target) {
        let output = [];
        let result = [];
        print_all_sum_rec(target, 0, 1, result, output);
        return output;
    };

    let unsetNotPrime = function (result, getContent = false) {

        $.each(result, function (key, val) {
            $.each(val, function (keyy, v) {

                if (getContent === true) {
                    return v;
                } else {

                    if (isPrime(v) === false) {
                        delete result[key];
                    }
                }
            });
        });
    }

    //Count of obj 
    function objectLength(obj) {
        var result = 0;
        for (var prop in obj) {
            if (obj.hasOwnProperty(prop)) {
                result++;
            }
        }
        return result;
    }


    $("#dec_btn").click(function () {
        var number = parseInt($("#decompose_number").val()),
            content = $('.decompose-content');

        if ($.isNumeric(number)) {

            let n = 9;
            let result = print_all_sum(number);
            unsetNotPrime(result);

            var filtered = result.filter(function (el) {
                return el != null;
            });

            content.empty();

            content.append('<h5 style="color:white;">Number of possible decompositions: ' + objectLength(result) + '</h5>')

            for (var i = 0; i < filtered.length; i++) {
                content.append('<p style="color:white;"> ' + filtered[i].join(',').replace(/,/g, '+').split() + '</p>')
            }

        } else {
            content.empty();
            content.append('<p style="color:red;">Must be number</p>')
        }
    });

}(jQuery));