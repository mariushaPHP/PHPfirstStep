<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        td{text-align: center;}
    </style>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Klase</th>
                    <th scope="col">Kodas</th>
                    <th scope="col">Vardas</th>
                    <th scope="col">Pavarde</th>
                    <th scope="col">Kontroliniu darbu vidurkis</th>
                    <th scope="col">Duomenu formavimo data</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($students as $key=>$klase):?> 
                <?php foreach($klase as $moksleivis):?>
                    <tr>
                        <td><?=$key?></td>
                        <td><?=$moksleivis["code"]?></td>
                        <td><?=$moksleivis["name"]?></td>
                        <td><?=$moksleivis["lname"]?></td>
                        <td><?= round(array_sum($moksleivis["results"])/count($moksleivis["results"]));?></td>
                        <td><?=$moksleivis["data"]?></td>
                    </tr> 
                <?php endforeach;?>
            <?php endforeach;?>

            </tbody>
        </table>
        
        
    </div>
</body>
</html>