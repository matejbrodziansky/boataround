<!-- 
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
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
</script>



<script>
    function isPrime(num) {
        for (let i = 2; i * i <= num; i++)
            if (num % i === 0)
                return false;
        return num > 1;
    }

    function primeDecom(number) {


        // console.log('Number is ' + number);
        var e = [];
        for (var i = 1; i <= number; i++) {
            if (isPrime(i) === true) {
                // console.log('number is decompositions of ' + i);
                e.push(i);
            }
        }
        // $.each(e, function(key, val) {
        // });
        return e;
    }
</script>


</body>

</html>