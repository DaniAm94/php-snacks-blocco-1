<?php 
// Lorem * 10
$big_paragraph= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, illum aspernatur tenetur laboriosam sapiente error reprehenderit placeat expedita magni natus vel iure, libero accusantium et quibusdam aliquam, aperiam quas blanditiis.
Asperiores vitae culpa harum magnam modi impedit quibusdam commodi tempora, inventore itaque eveniet rerum laudantium, fugiat quos libero quam cupiditate cumque nam, praesentium tenetur quasi? Nam, ab. Reprehenderit, labore voluptatibus!
Doloremque, incidunt veritatis. Nam quaerat in sequi error, eius ad iste itaque, amet pariatur iure saepe assumenda molestias eos neque ipsum tempora tenetur nemo expedita! Tempore perspiciatis maiores neque eos!
Voluptatum, quia nobis. Labore, dolore. Ipsa velit tempore nisi quidem, iusto quas nobis perferendis repellat numquam? Sed veritatis voluptas voluptatum, modi molestias quas quaerat, mollitia, autem accusantium dolorum sit saepe.
Perspiciatis sit, ipsa, impedit in similique obcaecati explicabo magni perferendis nihil porro numquam molestias dolores. Dolor nobis natus fugit architecto possimus, exercitationem aut modi soluta quae, quasi voluptatem reiciendis ut.
Rem numquam saepe incidunt rerum nobis aperiam fuga eos sunt aliquid dolore. Repellat ipsa praesentium odit, consequuntur voluptas nostrum reiciendis cupiditate fugit, error architecto aspernatur accusamus esse animi officiis nesciunt!
Tempore sunt voluptatem doloremque ipsam in error voluptatibus, dicta excepturi expedita eius laudantium unde ipsum impedit blanditiis possimus? Officiis, veniam. Excepturi adipisci hic quia quo quidem dignissimos laboriosam quas qui!
Quam doloremque est ipsam sit atque quibusdam impedit voluptas optio a iste ex corporis voluptate laudantium, quaerat aliquid assumenda. Tenetur reiciendis atque soluta eligendi eveniet quas ad excepturi non sapiente.
Voluptates beatae exercitationem dolorem, quia corrupti facere nemo amet enim adipisci porro asperiores aliquam dolorum, minus voluptate ab quo. Necessitatibus itaque eius laudantium cumque, reiciendis ipsam distinctio tempora eos fugit!
Distinctio dolorem ut nesciunt vel odit tenetur quo unde praesentium at perspiciatis! Iste quidem earum tempore ex rerum! Error blanditiis magnam expedita omnis doloribus quia iste quas cum praesentium nihil';


$paragraphs= explode('.', $big_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bonus</title>

<!-- Bootstrap -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container-sm vh-100 d-flex flex-column justify-content-center ">
        <?php foreach($paragraphs as $paragraph) : ?>
            <p><?= $paragraph?></p>
            <hr>
            <?php endforeach ;?>
    </div>
</body>
</html>