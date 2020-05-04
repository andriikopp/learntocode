<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165422435-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-165422435-1');
    </script>

    <title>LEARNTOCODE — Simple coding tasks for beginners in programming</title>
    <meta name="description" content="Practice simple programming problems and boost your coding skills! Challenges for any high-level programming language." />
    <meta name="keywords" content="coding, python, skills, programming, developers, java, math, problems, code, challenges" />

    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body style="margin: 1%;">
    <div class="jumbotron" style="margin-bottom: 0%;">
        <h1 class="display-4"><b>#learntocode</b> — Coding Tasks for Beginners</h1>
        <p class="lead">Set of simple programming problems for absolute beginners who can practice coding skills by solving these challenges</p>
        <hr class="my-4">
        <p>There is a long journey before your first coding interview, but here you can begin mastering your programming skills </p>
        <a class="btn btn-primary btn-lg" href="#practice" role="button">Practice programming</a>
    </div>

    <div class="container" style="margin-bottom: 1%;">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="https://github.com/andriikopp/learntocode">
                    <img src="GitHub-Mark-64px.png" alt="GitHub Mark" />
                </a>
            </div>
        </div>
        <div class="row justify-content-md-center" style="margin-top: 0.5%;">
            <div class="col-md-auto">
                <h4>Suggest updates or fixes — make Pull Requests on our GitHub repository</h4>
            </div>
        </div>
    </div>

    <div class="card-columns" id="practice">
        <div class="card bg-light mb-3">
            <div class="card-header">Getting Started</div>
            <div class="card-body">
                <h5 class="card-title">Hello World!</h5>
                <p class="card-text">Install an editor or IDE for your programming language and create a program that prints <code>"Hello world"</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Variables & Operators</div>
            <div class="card-body">
                <h5 class="card-title">Three numbers <code>a</code>, <code>b</code> and <code>c</code> are given,</h5>
                <p class="card-text">find their sum<br /><code>a + b + c</code></p>
                <p class="card-text">find their multiplication<br /><code>a * b * c</code></p>
                <p class="card-text">find their average value<br /><code>(a + b + c) / 3</code></p>
                <p class="card-text">find squares of these numbers<br /><code>a * a, b * b, c * c</code></p>
                <p class="card-text">find square roots of these numbers<br /><code>sqrt(a), sqrt(b), sqrt(c)</code></p>
                <p class="card-text">find absolute values of the differences of all pairs of numbers<br /><code>abs(a – b), abs(a – c), <br />abs(b – c)</code></p>
                <p class="card-text">find quotients and reminders of these numbers divided by 2<br /><code>a / 2 and a % 2, ...</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Decisions</div>
            <div class="card-body">
                <h5 class="card-title">Two numbers <code>a</code> and <code>b</code> are given,</h5>
                <p class="card-text">print the largest value<br /><code>if a &gt; b then print a else b</code></p>
                <p class="card-text">print the smallest value<br /><code>if a &lt; b then print a else b</code></p>
                <p class="card-text">calculate their sum if they are equal or their multiplication otherwise<br /><code>if a = b then a + b else a * b</code></p>
                <p class="card-text">calculate their square roots if they are both positive or absolute values of only negative value(s) otherwise<br />
                    <code>if a &gt; 0 and b &gt; 0 then sqrt(a), sqrt(b) <br />
                        else <br />if a &lt; 0 then abs(a), if b &lt; 0 then abs(b)</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Decisions</div>
            <div class="card-body">
                <h5 class="card-title">Month number <code>n</code> is given,</h5>
                <p class="card-text">print the season to which it belongs<br />
                    <code>if n &lt; 0 or n &gt; 12 then warning<br />
                        else if n = 12 or n &lt; 3 then winter<br />
                        else if n &lt; 6 then spring<br />
                        else if n &lt; 9 then summer<br />
                        else autumn</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Decisions</div>
            <div class="card-body">
                <h5 class="card-title">Three numbers <code>a</code>, <code>b</code> and <code>c</code> are given,</h5>
                <p class="card-text">find the largest sum of their pairs<br />
                    <code>if a + b &gt; a + c and a + b &gt; b + c then a + b ...</code></p>
                <p class="card-text">find the number to which sum of other two numbers is equal or multiply these three numbers otherwise<br />
                    <code>if a + b = c then print c<br />
                        else if a + c = b then print b<br />
                        else if b + c = a then print a<br />
                        else print a * b * c
                    </code></p>
                <p class="card-text">find the number that is greater than a sum of two others or sum these three numbers otherwise<br />
                    <code>if a + b &lt; c then print c<br />
                        else if a + c &lt; b then print b<br />
                        else if b + c &lt; a then print a<br />
                        else print a + b + c</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Loops & Arrays</div>
            <div class="card-body">
                <h5 class="card-title">Generate 15 random numbers in the range 1...10 and print only those are:</h5>
                <p class="card-text">odd<br />
                    <code>dividable by 2 with non-zero reminder</code></p>
                <p class="card-text">even<br />
                    <code>dividable by 2 with zero reminder</code></p>
                <p class="card-text">greater than 5</p>
                <p class="card-text">dividable by 3 with no reminder</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Loops & Arrays</div>
            <div class="card-body">
                <h5 class="card-title">Print all possible 3-digit binary numbers</h5>
                <p class="card-text">e.g., 000, 001, 011, ..., 111<br />
                    <code>nested loops should be used</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Loops & Arrays</div>
            <div class="card-body">
                <h5 class="card-title">Create an array of 10 random numbers in the range 1...100 that are:</h5>
                <p class="card-text">odd, multiply each number by itself before adding to the array<br /><code>dividable by 2 with non-zero reminder</code></p>
                <p class="card-text">even, find the square root of each number before adding to the array<br /><code>dividable by 2 with zero reminder</code></p>
                <p class="card-text">greater than 20 and lower than 80, and not equal to 50</p>
                <p class="card-text">dividable by 3, 5, or 10 with no reminder</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Loops & Arrays</div>
            <div class="card-body">
                <h5 class="card-title">Create an array of 100 random numbers in the range 0...100 and find:</h5>
                <p class="card-text">average value</p>
                <p class="card-text">max value</p>
                <p class="card-text">min value</p>
                <p class="card-text">sum of all values</p>
                <p class="card-text">number of values greater/lower than a given number</p>
                <p class="card-text">number of zero values</p>
                <p class="card-text">standard deviation<br /><code>sqrt(1 / n * for i = 1..n pow(x[i] - avg(x), 2))</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Functions</div>
            <div class="card-body">
                <h5 class="card-title">Create a function to calculate the given Fibonacci number (up to 20)</h5>
                <p class="card-text"><code>F(n) = F(n – 1) + F(n – 2), F(0) = 0, F(1) = 1</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Functions</div>
            <div class="card-body">
                <h5 class="card-title">Create a function to calculate the factorial of a given number (up to 10)</h5>
                <p class="card-text"><code>n! = n * (n – 1) * (n – 2) * ... * 3 * 2 * 1</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Functions</div>
            <div class="card-body">
                <h5 class="card-title">Create a function to generate an array of random numbers and another one to print arrays</h5>
                <p class="card-text">e.g., <code>randarr(size, min, max)</code> and <code>printarr(array, length)</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Classes (Structures)</div>
            <div class="card-body">
                <h5 class="card-title">Create a function to solve quadratic equations</h5>
                <p class="card-text">Function should return an object of a class (or instance of a structure) with 2 numeric fields (second field can take <code>INF</code> or something in case of a single root) and a string message field that says how many roots were found
                    or <code>"no real
                        roots"</code> if none (equation looks like <code>a * x ^ 2 + b * x + c</code> and should be solved using a discriminant)</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Classes (Structures)</div>
            <div class="card-body">
                <h5 class="card-title">Create functions to:</h5>
                <p class="card-text">generate a collection of 100 students, each of which has an average <code>score</code> (integers in the range 60...100) and a <code>year</code> (between 2000 and 2020) of enrollment</p>
                <p class="card-text">find <code>min</code>, <code>max</code>, and <code>average</code> scores in the generated dataset</p>
                <p class="card-text">find students with highest/lowest average score that were enrolled in the given period of time (between years <code>x</code> and <code>y</code>)</p>
                <p class="card-text">find students with the given <code>year </code>of enrollment</p>
                <p class="card-text">find so called "average students", which average score is in <code>z</code> interval around the average score</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Strings & Files</div>
            <div class="card-body">
                <h5 class="card-title">Read 10 strings from a file (line by line or separated using spaces) and print the longest (one or multiple)</h5>
                <p class="card-text">Create at least two functions like <code>read_lines(file_name)</code> and <code>longest_str(string_array)</code>, organize them as class members if possible</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Strings & Files</div>
            <div class="card-body">
                <h5 class="card-title">Read a sentence from a file and count:</h5>
                <p class="card-text">commas <code>,</code><br /> dots <code>.</code><br /> exclamation marks <code>!</code><br /> question marks <code>?</code><br /> dashes <code>-</code><br /> underscores <code>_</code><br /> colons <code>:</code><br />semicolons <code>;</code></p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Strings & Files</div>
            <div class="card-body">
                <h5 class="card-title">Read two sequences of characters (any texts) from two different files and find Hamming distance between these sequences</h5>
                <p class="card-text">Create at least two functions like <code>read_line(file_name)</code> and <code>hamming(str_a, str_b)</code>, organize them as class members if possible</p>
            </div>
        </div>

        <div class="card bg-light mb-3">
            <div class="card-header">Strings & Files</div>
            <div class="card-body">
                <h5 class="card-title">Create a class that describes a person</h5>
                <p class="card-text">Create fields like <code>first name</code>, <code>last name</code>, <code>date of
                        birth</code>, etc.</p>
                <p class="card-text">Create at least 5 objects of such class and put them into an array</p>
                <p class="card-text">Write the array into a file (create function <code>store_persons(file_name, persons_array)</code> or similar)</p>
                <p class="card-text">Restore the array from a file (create function <code>read_persons(file_name)</code> or similar)</p>
            </div>
        </div>
    </div>

    <div class="jumbotron" style="margin-bottom: -3%;">
        <p class="lead">
            <a href="mailto:7960954@gmail.com">Contact us</a> and subscribe to our <a href="https://twitter.com/learntocode_cs">Twitter</a> and <a href="https://www.instagram.com/learntocode.cs">Instagram</a>
        </p>
        <hr class="my-4">
        <p>
            <a href="https://creativecommons.org/licenses/by/3.0/legalcode">Creative Commons Attribution License <b>(CC-BY)</b></a>
            <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
            </script>
        </p>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
</body>

</html>
