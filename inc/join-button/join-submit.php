<!DOCTYPE html><html lang="en"><head> <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="author" content="prabhakar gupta"> <title>CSI NSIT</title> <link rel="shortcut icon" href="img/logo-csi.ico"></head><body><?php $name = $_POST['name']; $emailid = $_POST['emailid']; $roll = $_POST['roll']; $branch = $_POST['branch']; $year = $_POST['year']; $phone = $_POST['phone']; $to = 'csinsit.register@gmail.com'; $subject = '#csinsit.org CSI NSIT Join Us Form Submit'; $body = " \tname = \t$name\n emailid = \t$emailid\n roll = \t\t$roll\n branch = \t$branch\n year = \t\t$year\n phone = \t$phone\n"; if(mail($to , $subject , $body)){ include('join-us-success.php'); }?></body></html>