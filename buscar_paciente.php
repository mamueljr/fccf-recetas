<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3d7c96b4af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./modelo/style.css">

</head>

<body>
    <main>
        <h1>Busqueda de pacientes</h1>
        <div class="input-container">
            <input type="search" id="search" placeholder="Buscar paciente" />
        </div>
        <div class="errors-container">
            <p></p>
        </div>
        <div class="results-container" style="display: none;" id="resultsContainer">
            <table id="results">
                <thead>
                    <th style="visibility: hidden;">ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>NUMERO PENSIONES</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>CORREO</th>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </main>
    <script>src = "/modelo/script.js"</script>
</body>


</html>