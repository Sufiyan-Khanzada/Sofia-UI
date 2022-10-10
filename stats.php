<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa-solid fa-arrow-left-long fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">STATS</div>
        </div>
        <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        
        </div>
    </div>
    <!-- header end -->

    <!-- 
    <canvas id="line-chart" width="100%" height="50" style="margin-top:10px"></canvas> -->

    <canvas id="myChart" width="100%" height="50" style="margin-top:10px"></canvas>


    <canvas id="pie-chart" width="100%" height="100" style="margin-top:100px"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN'],
                datasets: [{
                    label: 'PAST MONTH INCOME',
                    data: [12, 19, 10, 5, 14, 3],
                    backgroundColor: [
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB'
                    ],
                    borderColor: [
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
                }
            }

        });

        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["Glasses", "Clothes", "Sets", "Handbags", "Trousers"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#59788E", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                    data: [2478, 5267, 734, 784, 433]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'RENTAL BY PRODUCTS'
                }
            }
        });




        // new Chart(document.getElementById("line-chart"), {
        //     type: 'line',
        //     data: {
        //         labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
        //         datasets: [{
        //             data: [1500, 1104, 1600, 106, 107, 111, 133, 221, 783, 2478],
        //             label: "JAN",
        //             borderColor: "#3e95cd",
        //             fill: false
        //         }, {
        //             data: [2820, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
        //             label: "FEB",
        //             borderColor: "#8e5ea2",
        //             fill: false
        //         }, {
        //             data: [168, 170, 178, 190, 203, 2760, 4080, 547, 675, 734],
        //             label: "MAR",
        //             borderColor: "#3cba9f",
        //             fill: false
        //         }, {
        //             data: [40, 20, 10, 16, 24, 3800, 740, 167, 508, 784],
        //             label: "APR",
        //             borderColor: "#e8c3b9",
        //             fill: false
        //         }, {
        //             data: [6, 3, 2, 2, 7, 26, 82, 172, 312, 433],
        //             label: "JUN",
        //             borderColor: "#c45850",
        //             fill: false
        //         }]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: 'MONTHLY INCOME'
        //         }
        //     }
        // });
    </script>

<div class="gapgap1"></div>

<!-- footer start -->
<?php include 'footer.php' ?>
<!-- footer end -->



</body>

</html>