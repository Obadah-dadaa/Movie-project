<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('movies')->insert([
    [
    'name' => 'Joker',
    'image' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD…ktIdHL8n8hMRtHhJJVIzx9hrNkUEkliz0oDm8JJJKTZH/2Q==',
    'rating' => '8.4',
    'discreption' => 'رويدًا رويدًا، تتكاتف الضغوظ والظروف على فنان كوميدي فاشل حتى يصيبه الجنون ويتحول إلى مجرم وقاتل مهووس.',
    'promotion' => 'https://youtu.be/zAGVQLHvwOY',
    'video' => 'v=XccctzLPLzeNiTtcRccctzgactcRctqeBqrcfweeteHPLYcGGpqctRtctxGejtcRctptzptuWwxWdsaxGRLXpjtchRtcteBKctcRctpOtRecYYcppcsCccYOOrtRtctLqWheBgLktcRpOhpppppRpppYtpRReRtctGBrtcRctmeBGzYgArWceAWeLAGctRtcteBGctcRctpseeesNezPGRTctch&h=db4f1b4feddc375bae257349eeda4d51',
    'duration' => '02:01:50',
    'type_id' => '1',
    'language_id' => '2',
    'producingYear_id' => '3'
    ],


    
        [
    'name' => 'Fantastic 4',
    'image' => 'https://i.egycdn.com/pic/WmFwZndlY21ibUVtVFlFbWFjbW1tZFRtYWNOdm1i.jpg',
    'rating' => '5.7',
    'discreption' => 'بعد وفاة دكتور (دووم) وعودة الخارقون الأربعة لحياتهم الطبيعية، يظهر عدو جديد يدعى (راكب الأمواج الفضي) قادم من الفضاء الخارجي بهدف تدمير الأرض والقضاء على الجنس البشري، مما يخلق مهمة جديدة على الخارقون الأربعة وهى كشف سر هذا العدو والقضاء عليه.',
    'promotion' => 'https://r2---sn-jtu5jt2g0n-aj5k.googlevideo.com/videoplayback?expire=1633455328&ei=gDhcYbbGKMS7WJTSltAD&ip=178.253.95.112&id=o-AJBllx6g17etxX8wE7GviS0kDXT6BMFrNZsfIA_GArH_&itag=242&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mh=Mb&mm=31%2C29&mn=sn-jtu5jt2g0n-aj5k%2Csn-hgn7yn7e&ms=au%2Crdu&mv=m&mvi=2&pl=19&initcwndbps=48750&vprv=1&mime=video%2Fwebm&ns=a1DmoCOTiqS_IIuMotsnat8G&gir=yes&clen=2173706&dur=129.128&lmt=1543820788828669&mt=1633433346&fvip=2&keepalive=yes&fexp=24001373%2C24007246&beids=9466586&c=WEB_EMBEDDED_PLAYER&txp=1311222&n=sgsR4E5dXBuz1g&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRAIgfMZ8f6na_Duf_TMZn1z6lxVTdVSmKJxIdsUQWF80YdECIGrSWcrtSn3CbTk31NsYpsF1-v-I2BRB8T2F5Bq9e3pg&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRQIhANVC2nNcYgRMcxmsXHmIk4hOQpC7PjJgadEKHNmySPDeAiARV3m-RFRSQ8xfgcmSQ0B27_8l20gZ_xcvkoiCF1GA9w%3D%3D&alr=yes&cpn=DTChBEKCNyzPt1jo&cver=1.20210928.1.1&rn=1',
    'video' => 'k2ma.vidstream.to/stream/87a0b639ea5d86c6HOXcmDLbqPkuy83lk.AXsFgHt0kWHUjfW0ZmIthw__.VndJTndsWTkvM3ZHd0FVSWd6dk55d3JGcWtYVW1tSEM4TmFQcDM0dXBBVDFMZlpVQ0Z2TVFXeXVDbi9rWExYMVorZjhRZlZYMSszVTQyZzFNUnlleVM4NXFCNXFqa2Z5UlFMcHhLVHJDb1dUV0ZtMkx0bHhKOFhIclZ5VDhMRkZ1TjZGLzU4dnNnNGU5SlQ2MVFvcmhZWndZUThzSHAzRkNQRVB1V3NMTDZKUHNKYlEwcUFocjdyamZRdUd0ZkFIOHFFNEUxaUpIRDlMM0poQnY5TzlPZi9jQmI1UjVjSHpEUkJ6TXlrdlNiYVFFTENTTEZQUWlCK2YxL3R3bkl4NmVCL3FHUTZhS1NPUWFzWng2MHRNY2trbkFLWE0yNTdGRlYxS0JZUzRaMzZ6WHovV2dBamwxRFJUdUxISGFtTVY2WVg4S01qcG9hV0RtclhRdjlLdGZ0V3FqR1JZR2lNeVI1T2liMVRJZlBnVVNwbkxWRGd1Z0t1ajBhalg5QUxJd1cxVjJlRW0xM0M5bkNOWjkxeTBRNE1aSkxsUFZpS1duRUZkK0R5KzlUMmJYdjRHL3RDd2NiVmg4U2Z6NkJsVGEyeGU_/stream.m3u8',
    'duration' => '01:31:51',
    'type_id' => '2',
    'language_id' => '2',
    'producingYear_id' => '1'
    ],

        [
    'name' => 'Cruella',
    'image' => 'https://i.egycdn.com/pic/WmFwZndlY21IY21UYm12bXZ2UmN2Y2xtVG93UFBteg.jpg',
    'rating' => '7.4',
    'discreption' => 'تدور أحداث الفيلم في السبعينيات بلندن حول قصة حياة كورلا دي فيل السابقة وطفولتها قبل أن تتحول إلى السيدة الشريرة بفيلم الرسوم المتحركة 101 Dalmatians حيث سنرى العوامل التي أدت إلى هذا التحول.',
    'promotion' => 'https://www.youtube.com/api/timedtext?v=gmRKv7n2If8&asr_langs=de%2Cen%2Ces%2Cfr%2Cid%2Cit%2Cja%2Cko%2Cnl%2Cpt%2Cru%2Ctr%2Cvi&caps=asr&exp=xftt%2Cxctw&xoaf=5&hl=ar&ip=0.0.0.0&ipbits=0&expire=1633459608&sparams=ip%2Cipbits%2Cexpire%2Cv%2Casr_langs%2Ccaps%2Cexp%2Cxoaf&signature=61FF2B00DCD22AF358A4084FEFB335A5F5C1FEEA.A0C1E6DD6591FB41612819A361A92A9F02EDD760&key=yt8&lang=en-US&fmt=vtt',
    'video' => '%7C2Zj4Yiqih86Ad.qLqwYMU41yloIxSowZL8VQ__.bWVPMmRaNm5tQXhJdlZDU3N3THdHZ0hkQU01ZVEwSGR0dmhGa00yZ2kzd2dCT2dXSWlXMldGa2xKZXhlVUpFSnBUK2cvQTJvWVpjMSsxWEJjdkRpejA1TVl0VW53RFhhc0V2d2QyOG1HUndYVDFoZm1veWNkVXR4RG9qakpDRVBTVmI3OXMydkxMbDR2dGQvY2VMODJ6eWdUbnZDMmZaWVhXeGllOHpaRmY3WGlOSC9sMTVpbUVGVFZCdVlzYmNOeG1YeHVTTXRvL1JjOEplaWROYVQxSHFTbjRLRUJSWHdnTENEMXN5THcwTkJoUWYzdG0rWFNicFFpZmo2c0ZmLzkyNFlCanI1NmNIbzQwOGRNVDZTeWxOaDB6TFg0dGdITi9lQU1FN1ExaUdGcGxzdy9tYzJrMnIyVk5Kci82SU4yQVBMUzBMMHdJZngrUWxyeHhRVmNxZVhKaWJmWHprRytpV1Bsdmg1ZTZqc1pZZTF5aVBtOGlxM2dCcFk1VEpUTGlHeHdSdzBXWVloR3Mzbk5HdWkvMDdRWWxqUg__/stream.m3u8',
    'duration' => '02:13:56',
    'type_id' => '3',
    'language_id' => '2',
    'producingYear_id' => '5'
    ],

        [
    'name' => 'Me Before You',
    'image' => '   https://i.egycdn.com/pic/WmFwZndlY21ZcFl2bXZtYkVjUHh2Y21qdndLeG1q.jpg',
    'rating' => '7.4',
    'discreption' => 'رتعمل (لو كلارك) في أحد المتاجر، وبعد فترة تطرد من عملها، وعلى الجانب الآخر تقع حادثة دراجة نارية للشاب الثري (ويل تراينور) تمنعه عن القيام بكل ما اعتاد عليه في السابق وتتركه قعيدًا، يقترب عالميهما معًا حينما تعمل (لو) مساعدة شخصية له لتزيد حياة كل واحد منهما بهجة وسعادة على غير المنتظر.',
    'promotion' => 'https://www.youtube.com/watch?v=Eh993__rOxA',
    'video' => 'https://a6-yd4-s-vju0.vidstream.to/stream/45744ce028bae873v1uJ%7CvUMnLR62BsW8.HN%7CoA5e1GmRhSzwsF9FK9Q__.aVlFd0c0WlVrbE9nVEU4SFdFWW11MmY2YUdNeVluckR5Q3FrdXJoc29jSEU2S3hMdEdyVHFhZjZuZ3dtUnk1dUdIUWNjeTFPQjJJQ05KKzBRNEp4djZMRTRZWGJHb1d3aVdqTnZwa1V6U21rNDNRUklZTk5FdEE2YWVlNW1yd01CdTJhbi9nTFFacDczcWMzYjZmRWszbExFeiszNjJVcTY1U0NwSXZsRXQvMy8zK2tNV3RkekZUdEZlSDNrNnc5UENnaHpYWFhWaGVZSENQNHN3WlNQays3K3QrK1NERldnbGhVclY2U1pNTXZ4Ty9FL1dRdjdmYUFua0RZODkyQTVqa2wwcGJqR1RWbmhMTm9OcldXN1NXQU94NnBYYXo5dW9DZWd4Z3pxc2xFZFFJcFgzcUZybjk0T0E3TWtMZEtLMnRhVm5CbzQ2RGVxTldOSkJ3QVltK1RYZDJHUkluSCtOZmhKaHViVlJpeWVtNEQ4SkRjSEFMRFdmSm1aSVRuU3lMN1pnQnhFRWc9/stream.m3u8',
    'duration' => '01:50:15',
    'type_id' => '4',
    'language_id' => '2',
    'producingYear_id' => '1'
    ],

        [
    'name' => 'The Invisible Guest',
    'image' => 'https://i.egycdn.com/pic/WmFwZndlY21idmNtbW1qbWp2Y0VjdmNQdk5FYW1tbXpQ.jpg',
    'rating' => '8.1',
    'discreption' => 'A successful entrepreneur accused of murder and a witness preparation expert have less than three hours to come up with an impregnable defense.',
    'promotion' => 'https://www.youtube.com/watch?v=epCg2RbyF80',
    'video' => 'https://o2-sp5-n-25m6.vidstream.online/stream/bace8f558cde5152TnDRckLT-yzD2bieG.AHZ04Otca7kTKZ6UGBLr2A__.N2k3VkU3RDBnem1WRmljSlI4QTNUYUc1QWdoSmd3Tk1FWThOeDBCNXQ0ZG1XN3Y1WlRQRDYrcmd3cDYydm5uTDAwaTF4bnJuOGJNQ1I5dW5MaENuVDd1U0s3c3pJVDJyK3VjdlFEWUdMeUwrdC8zY0hRa1MwaHFxd1pkNU5UcmNSNVhrdG9UV3kzWGF1d3FEbnVSbnBYZ0EvSmhvdGpqNjVMRkViSjh0blNXeDBTd0dMNVMvcWtKRkpWS25ZZHF5VkFBVnBTRThhdExnMG9CREY0Yk9ENlZOQmMzS21SR2RpWFFGdklXUTJqcGhqZWJsbWJ0b2F0N1dRbk9EejZnUzFRWHQ0QWZwa3FqWkpyS0FndGNSZVpXQ2dJUEFwMEhYckRYNlBhQkRrYVVEOU10cUVhSVNtd2tjZVoyTEMwMDM2d1gzRUYzMlg1ZDVUSXE3OXp6OTlCeVpZRVk3bG4xMm5mT29LOEEvVW40V0k2d2JFbkJKWE1SNGgwYW5DallQVWx5OXFVeFI2clpxaHpqOFJFWXk_/stream.m3u8',
    'duration' => '01:46:20',
    'type_id' => '2',
    'language_id' => '4',
    'producingYear_id' => '1'
    ]

]);

    }
}

  //   $jsondata = file_get_contents('obada.json');
  //    $data = json_decode($jsondata, true);
  //   $name = $data['name'];
  //   $image = $data['image'];
  //   $rating = $data['rating'];
  //   $description = $data['description'];
  //   $promotion = $data['promotion'];
  //   $video = $data['video'];
  //   $duration = $data['duration'];
  //   $type_id = $data['type_id'];
  //   $language_id = $data['language_id'];
  //   $producingYear_id=$data['producingYear_id'];

  //         $sql=''INSERT INTO movies(name,image,rating,description,promotion,video,duration,type_id,language_id,producingYear_id) VALUES ('$name',' $image','$rating',  '$description','$promotion','$video','$duration','$type_id',' $language_id','$producingYear_id')'';
  // mysql_query($connect,$sql);
   