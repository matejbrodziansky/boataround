<!-- 
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    let print_all_sum_rec = function(target, current_sum, start, result, output) {
        if (current_sum === target) {
            output.push(result.slice());
        }


        for (let i = start; i < target; i++) {
            let temp_sum = current_sum + i;
            if (temp_sum <= target) {
                if (isPrime(i) != false) {
                    if(i + i === target){
                        result.push(i);

                    }
                }
                print_all_sum_rec(target, temp_sum, i, result, output);
                result.pop();
            } else {
                return;
            }
        }
    };

    let print_all_sum = function(target) {
        let output = [];
        let result = [];
        print_all_sum_rec(target, 0, 1, result, output);
        return output;
    };

    // let n = 4;
    // let result = print_all_sum(n);
    // console.log(result);

    //----------------------------------------------------------------------------------------
    const f = n => { // n is a positive number
        if (n == 0) return ["0"]
        if (n == 1) return ["1"]
        if (n == 2) return ["0+2", "1+1"]
        const result = [n + "+0"]
        for (let i = n - 1; i >= n / 2 | 0; i--) {
            for (const x of (f(n - i) || [])) {
                for (const y of (f(i) || [])) {
                    result.push(y + "+" + x)
                }
            }
        }

        // Remove duplicated records
        const map = result.map(v => v.split `+`.filter(x => +x > 0).sort((m, n) => m - n).join `+`)
        return [...new Set(map)]
    }

    //Testing
    // a = f(6)
    // console.log(a)








    function getPrimeFactors(integer) {
        const primeArray = [];
        let isPrime;

        // Find divisors starting with 2
        for (let i = 2; i <= integer; i++) {
            if (integer % i !== 0) continue;

            // Check if the divisor is a prime number
            for (let j = 2; j <= i / 2; j++) {
                isPrime = i % j !== 0;
            }

            if (!isPrime) continue;
            // if the divisor is prime, divide integer with the number and store it in the array
            integer /= i
            primeArray.push(i);
        }

        return primeArray;
    }

    // console.log(getPrimeFactors(13195).join(', '));



    // javascript
    function prime_factors(n) {
        if (!n || n < 2)
            return [];
        var f = [];
        for (var i = 2; i <= n; i++) {
            while (n % i === 0) {
                f.push(i);
                n /= i;
            }
        }
        return f;
    };

    // console.log(prime_factors(10));


    function isPrime(num) {
        for (let i = 2; i * i <= num; i++)
            if (num % i === 0)
                return false;
        return num > 1;
    }

    // console.log(isPrime(4));

    function prime(number) {


        console.log('zadané čislo ' + number);
        var e = [];
        var f = [];
        var numbero = [];


        for (var i = 1; i <= number; i++) {
            // console.log(i);
            if (isPrime(i) === true) {
                console.log('number is decompositions of ' + i);



            }

        }

        // ideeeeee
        let result = print_all_sum(number);
        console.log(result);

        // $.each(e, function(key, value) {
        //    let val = value + value;
        //     // console.log(val);
        //     if (val === number) {
        //         console.log(val);
        //         console.log(value);
        //     }
        // });


    }

    prime(6);


    function isPrime(num) {
        for (let i = 2; i * i <= num; i++)
            if (num % i === 0)
                return false;
        return num > 1;
    }



    function subsetSum(numbers, target, partial) {
        var s, n, remaining;

        partial = partial || [];

        // sum partial
        s = partial.reduce(function(a, b) {
            return a + b;
        }, 0);

        // check if the partial sum is equals to target
        if (s === target) {
            console.log("%s=%s", partial.join("+"), target)
        }

        if (s >= target) {
            return; // if we reach the number why bother to continue
        }

        for (var i = 0; i < numbers.length; i++) {
            n = numbers[i];
            remaining = numbers.slice(i + 1);
            subsetSum(remaining, target, partial.concat([n]));
        }
    }

    // subsetSum([3, 9, 8, 4, 5, 7, 10], 15);
</script>


</body>

</html>