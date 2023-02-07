<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- css linked -->
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <style>
        body {
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
            background: linear-gradient(#913175, #CD5888);
            color: #20262E;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        form {
            border: 2px solid black;
            border-radius: .5rem;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: .5rem;
            background: linear-gradient(#E9E8E8, #F1DBBF);
        }

        form input:not(.btn) {
            width: 100%;
            margin: .2rem;
        }

        form div {
            margin: .2rem;
        }
    </style>

</head>

<body>

    <form action="/index.php" class="form">
        <div>
            <h1 class="text-center">Admission from</h1>
            <div>
                <label for="surname">Surname : </label>
                <input required autofocus type="text">
            </div>
            <div>
                <label for="name">Name : </label>
                <input required type="text">
            </div>
            <div>
                <label for="f-name">Fathers Name : </label>
                <input required type="text">
            </div>
            <div>
                <label for="m-name">Mothers Name : </label>
                <input required type="text">
            </div>
            <div>
                <label for="aadhar-no">Aadhar card number : </label>
                <input required type="number">
            </div>
            <div>
                <label for="email">Email : </label>
                <input required type="email">
                <label for="password">Password : </label>
                <input required type="password">
            </div>
            <div>
                <label for="dob">DOB</label>
                <input required type="date">
            </div>
            <div>
                <label for="placeofbirth">Place of Birth</label>
                <input required type="text">
            </div>

            <div>
                <label for="city">City</label>
                <input required type="text">
            </div>

            <div>
                <label for="district">District</label>
                <input required type="text">
            </div>

            <div>
                <label for="problem">Physical problems : </label>
                <input required type="text">
            </div>
            <div>
                <label for="caste">Caste </label>
                <input required type="text">

                <label for="">Mother tongue</label>
                <input required type="text">
            </div>
            <div>
                <label for="">Category</label>
                <input required type="text">

                <label for="">Religion</label>
                <input required type="text">
            </div>

            <div>
                <label for="">Name of the school laste attended</label>
                <input required type="text">
            </div>
            <div>
                <label for="">Standard to which Admission sought</label>
                <input required type="text">
            </div>
            <div>
                <label for="">Residential Address</label>
                <input required type="text">
            </div>

            <div>
                <label for="">City : </label>
                <input required type="text">
            </div>

            <div>

                <label for="">State : </label>
                <input required type="text">
            </div>


            <div>
                <label for="">Medical Information (is compulsary) </label>
                <div>
                    A) Blood Group : <input required type="text">
                    B) Identification Mark : <input required type="text">
                </div>
            </div>

            <div>
                <label for="files">Choose photo</label>
                <input required type="file">
            </div>

            <input class="btn" type="submit">

            <input class="btn" type="reset">
        </div>
    </form>

</body>

</html>