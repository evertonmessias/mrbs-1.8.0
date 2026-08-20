<?php
namespace MRBS;
$timezone = "America/Argentina/Buenos_Aires";
/*******************
 * Database settings
 ******************/
$dbsys = "mysql";
$db_host = "db";
$db_database = "mrbsic_prod";
$db_login = "mrbsic_prod";
$db_password = 'mrbsic_prod';
$db_tbl_prefix = "mrbs_";
$db_persist = FALSE;

$mrbs_admin = "Reservas";
$mrbs_admin_email = "everton@ic.unicamp.br";
$mrbs_company = "Instituto de Computação - UNICAMP";   // This line must always be uncommented ($mrbs_company is used in various places)
$mrbs_company_logo = "logo_ic.png";    // name of your logo file.   This example assumes it is in the MRBS directory
$mrbs_company_url = "http://www.ic.unicamp.br/";

$unicode_encoding = 1;
$strftime_format['daymonth'] = "%d %b";
$twentyfourhour_format = 1;

$ldap_host = "ldap2.ic.unicamp.br";
$ldap_port = 389;
$ldap_v3 = true;
$ldap_tls = true;
$ldap_base_dn = "ou=People,dc=ic,dc=unicamp,dc=br";
$ldap_user_attrib = "uid";
$ldap_filter = "|(gidNumber=1312)(gidNumber=1104)(gidNumber=1600)(lab=reservas)(uid=branquinho)(&(gidNumber=1500)(uid=testert))";
$ldap_debug = TRUE;
$ldap_perm_groups = array(1500=>'spec',1600=>'admic',1312=>'admsis',1104=>'staff',1706=>'grad');

$auth["type"] = "ldap";
$auth["admin"][] = "william";
$auth["admin"][] = "everton";


// USUÁRIOS AUTORIZADOS NO AMBIENTE DOCKER
// Estes usuários ignoram o LDAP; somente fora do host de produção.
$auth["docker"][] = "william";
$auth["docker"][] = "everton";


//RESERVAS ATUAL

$auth["admin"][] = "cris_mcamargo"; // A user name from the user list. Useful 
$auth["admin"][] = "vera"; // A user name from the user list. Useful 
$auth["admin"][] = "denise"; // A user name from the user list. Useful 
$auth["admin"][] = "wbagni"; // A user name from the user list. Useful 
$auth["admin"][] = "flavio"; // A user name from the user list. Useful 
$auth["admin"][] = "priscilla"; // A user name from the user list. Useful 
$auth["admin"][] = "estag-cpg"; // Conforme RT # 36741
$auth["admin"][] = "estag-cpg2"; // Conforme RT # 36741
//$auth["admin"][] = "denilson"; // Conforme RT # 39499 -- Saiu do IC
$auth["admin"][] = "helena"; // Conforme RT # 48447
$auth["admin"][] = "apoio-cpg"; // Conforme RT # 49849
$auth["admin"][] = "rubensjr"; //Acesso admin para o ATU
$auth["admin"][] = "daiane"; //Acesso admin para diretoria executiva
$auth["admin"][] = "carolina"; //Acesso admin para secretaria de  extensao
$auth["admin"][] = "leandro";
$auth["admin"][] = "anabc"; //conforme RT 52241

$booking_types[] = "A";
$vocab_override["en"]["type.A"] = "Aula";
$booking_types[] = "B";
$vocab_override["en"]["type.B"] = "Palestra";
$booking_types[] = "C";
$vocab_override["en"]["type.C"] = "Reunião";
$booking_types[] = "D";
$vocab_override["en"]["type.D"] = "Tese/Dissertação";
$booking_types[] = "F";
$vocab_override["en"]["type.F"] = "Congregação";
$booking_types[] = "G";
$vocab_override["en"]["type.G"] = "Concurso";
$booking_types[] = "H";
$vocab_override["en"]["type.H"] = "Feriado";
$booking_types[] = "J";

//override mail configs

$mail_settings['admin_on_bookings']      = FALSE;  // the addresses defined by $mail_settings['recipients'] below
$mail_settings['area_admin_on_bookings'] = TRUE;  // the area administrator
$mail_settings['room_admin_on_bookings'] = TRUE;  // the room administrator
$mail_settings['booker']                 = TRUE;  // the person making the booking
$mail_settings['book_admin_on_approval'] = TRUE;  // the booking administrator when booking approval is enabled

$mail_settings['domain'] = '@ic.unicamp.br ';
 
$mail_settings['on_new']    = TRUE;   // when an entry is created
$mail_settings['on_change'] = FALSE;
$mail_settings['on_delete'] = TRUE;  // when an entry is deleted

$mail_settings['details']   = TRUE; // Set to TRUE if you want full booking details;
                                     // otherwise you just get a link to the entry
$mail_settings['html']      = TRUE; // Set to true if you want HTML mail

$sendmail_settings['path'] = '/usr/sbin/sendmail';
$mail_settings['from'] = $mrbs_admin_email;
$mail_settings['recipients'] = $mrbs_admin_email;

// Set the language used for emails (choose an available lang.* file).
$mail_settings['admin_lang'] = 'pt-br';   // Default is 'en'.

$vocab_override["en"]["type.J"] = "EQ";
$vocab_override["en"]["entry.hasVideoConf"]="Will it have video conference?";
$vocab_override["pt-br"]["entry.hasVideoConf"]="Terá vídeo conferência?";
$vocab_override["en"]["entry.hasRecording"]="Will it have recording/streaming?";
$vocab_override["pt-br"]["entry.hasRecording"]="Terá gravação/streaming?";
$vocab_override["en"]["entry.hasLaptop"]="I'll use my own laptop";
$vocab_override["pt-br"]["entry.hasLaptop"]="Usarei notebook próprio";