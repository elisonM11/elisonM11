<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
.whatsapp-link {
    text-decoration: none;
    color: #25D366; /* Warna khas WhatsApp */
}

.whatsapp-link i {
    font-size: 24px; /* Ukuran ikon */
    transition: color 0.3s ease; /* Transisi saat hover */
}

.whatsapp-link:hover i {
    color: #128C7E; /* Warna saat hover */
}
.facebook-link {
    color: #3b5998; /* Warna ikon Facebook */
    text-decoration: none; /* Menghilangkan garis bawah pada link */
    font-size: 24px; /* Ukuran ikon */
    transition: transform 0.3s ease;
}

.facebook-link:hover {
    color: #2d4373; /* Warna saat dihover */
    transform: scale(1.2); /* Efek zoom saat dihover */
}
.instagram-link {
  color: #E1306C; /* Warna khas Instagram */
  text-decoration: none;
  transition: color 0.3s ease-in-out; /* Animasi saat hover */
}

.instagram-link:hover {
  color: #F77737; /* Warna saat dihover */
}

.instagram-link i {
  font-size: 24px; /* Ukuran ikon */
  margin-right: 8px; /* Jarak jika diperlukan */
}
