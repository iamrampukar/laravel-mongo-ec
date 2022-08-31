<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
    // $paymentModel = Payment::paginate(2); // Comment For only age 29
    // $paymentModel = Payment::where('comment.age',29)->get(); // Comment For only age 29
    // $paymentModel = Payment::where('comment.age',28)->paginate(2); // Comment For only age 28 with paginate
    // $paymentModel = Payment::whereBetween('comment',[1,50]); // not working
    /*
    $paymentModel = Payment::where('first_name',"Kaine")
        ->orWhere(function ($query) {
            return $query->where('age', '>', 48);
        })->get();
    */
    // $paymentModel = Payment::max('comment.age');

        
    $limit = 2;
    $projections = ['id', 'first_name'];

    $paymentModel = DB::collection('payments')
    ->paginate($limit, $projections);
    


    return view('payment.index',compact('paymentModel'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param  \App\Http\Requests\StorePaymentRequest  $request
* @return \Illuminate\Http\Response
*/
public function store(StorePaymentRequest $request)
{
//
}

/**
* Display the specified resource.
*
* @param  \App\Models\Payment  $payment
* @return \Illuminate\Http\Response
*/
public function show(Payment $payment)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\Models\Payment  $payment
* @return \Illuminate\Http\Response
*/
public function edit(Payment $payment)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  \App\Http\Requests\UpdatePaymentRequest  $request
* @param  \App\Models\Payment  $payment
* @return \Illuminate\Http\Response
*/
public function update(UpdatePaymentRequest $request, Payment $payment)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  \App\Models\Payment  $payment
* @return \Illuminate\Http\Response
*/
public function destroy(Payment $payment)
{
//
}

public function paymentSave() {
    $payment = $this->paymentData();
    foreach ($payment as $key => $value) {
        Payment::create($value);
    }
}

private function paymentData() {
    $data1 = array (
        array (
            'first_name' => 'Delly',
            'last_name' => 'Walthew',
            'email' => 'dwalthew0@examiner.com',
            'gender' => 'Female',
            'ip_address' => '195.6.220.183',
            'age' => 61,
            'comment' => 'dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus',
        ),
        array (
            'first_name' => 'Rubia',
            'last_name' => 'Eastup',
            'email' => 'reastup1@imgur.com',
            'gender' => 'Female',
            'ip_address' => '188.198.235.90',
            'age' => 40,
            'comment' => 'duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus',
        ),
        array (
            'first_name' => 'Norene',
            'last_name' => 'O\'Glessane',
            'email' => 'noglessane2@usatoday.com',
            'gender' => 'Polygender',
            'ip_address' => '208.223.36.115',
            'age' => 7,
            'comment' => 'id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla',
        ),
        array (
            'first_name' => 'Torrey',
            'last_name' => 'Schulze',
            'email' => 'tschulze3@shareasale.com',
            'gender' => 'Male',
            'ip_address' => '23.233.143.59',
            'age' => 54,
            'comment' => 'quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla',
        ),
        array (
            'first_name' => 'Alana',
            'last_name' => 'Bethel',
            'email' => 'abethel4@joomla.org',
            'gender' => 'Female',
            'ip_address' => '122.213.101.101',
            'age' => 11,
            'comment' => 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum',
        ),
        array (
            'first_name' => 'Olin',
            'last_name' => 'Mozzini',
            'email' => 'omozzini5@seattletimes.com',
            'gender' => 'Male',
            'ip_address' => '92.174.24.31',
            'age' => 33,
            'comment' => 'aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo',
        ),
        array (
            'first_name' => 'Bing',
            'last_name' => 'De Banke',
            'email' => 'bdebanke6@nhs.uk',
            'gender' => 'Male',
            'ip_address' => '32.130.85.7',
            'age' => 64,
            'comment' => 'in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie',
        ),
        array (
            'first_name' => 'Adams',
            'last_name' => 'Batchelder',
            'email' => 'abatchelder7@quantcast.com',
            'gender' => 'Male',
            'ip_address' => '94.99.227.37',
            'age' => 77,
            'comment' => 'quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis',
        ),
        array (
            'first_name' => 'Stormie',
            'last_name' => 'Measey',
            'email' => 'smeasey8@google.nl',
            'gender' => 'Female',
            'ip_address' => '185.66.66.228',
            'age' => 62,
            'comment' => 'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci',
        ),
        array (
            'first_name' => 'Dal',
            'last_name' => 'Lynes',
            'email' => 'dlynes9@fastcompany.com',
            'gender' => 'Male',
            'ip_address' => '161.64.27.14',
            'age' => 4,
            'comment' => 'orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam',
        ),
        array (
            'first_name' => 'Augustina',
            'last_name' => 'Conichie',
            'email' => 'aconichiea@mozilla.org',
            'gender' => 'Female',
            'ip_address' => '140.228.235.159',
            'age' => 53,
            'comment' => 'augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur',
        ),
        array (
            'first_name' => 'Cloris',
            'last_name' => 'Spittall',
            'email' => 'cspittallb@bloglines.com',
            'gender' => 'Female',
            'ip_address' => '206.210.237.195',
            'age' => 76,
            'comment' => 'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean',
        ),
        array (
            'first_name' => 'Boigie',
            'last_name' => 'Cahan',
            'email' => 'bcahanc@slate.com',
            'gender' => 'Male',
            'ip_address' => '92.133.201.166',
            'age' => 25,
            'comment' => 'faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi',
        ),
        array (
            'first_name' => 'Inger',
            'last_name' => 'Brooke',
            'email' => 'ibrooked@last.fm',
            'gender' => 'Male',
            'ip_address' => '39.170.130.25',
            'age' => 50,
            'comment' => 'natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam',
        ),
        array (
            'first_name' => 'Guinna',
            'last_name' => 'Menci',
            'email' => 'gmencie@engadget.com',
            'gender' => 'Female',
            'ip_address' => '239.180.69.188',
            'age' => 53,
            'comment' => 'neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales',
        ),
        array (
            'first_name' => 'Cleveland',
            'last_name' => 'Allen',
            'email' => 'callenf@ebay.com',
            'gender' => 'Male',
            'ip_address' => '42.1.73.82',
            'age' => 23,
            'comment' => 'curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem',
        ),
        array (
            'first_name' => 'Ebba',
            'last_name' => 'Wombwell',
            'email' => 'ewombwellg@yellowbook.com',
            'gender' => 'Female',
            'ip_address' => '174.118.208.126',
            'age' => 14,
            'comment' => 'potenti nullam porttitor lacus at turpis donec posuere metus vitae',
        ),
        array (
            'first_name' => 'Paton',
            'last_name' => 'Hanshaw',
            'email' => 'phanshawh@deliciousdays.com',
            'gender' => 'Male',
            'ip_address' => '246.13.190.244',
            'age' => 12,
            'comment' => 'ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien',
        ),
        array (
            'first_name' => 'Willy',
            'last_name' => 'Scally',
            'email' => 'wscallyi@taobao.com',
            'gender' => 'Male',
            'ip_address' => '115.97.207.153',
            'age' => 67,
            'comment' => 'duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam',
        ),
        array (
            'first_name' => 'Claudianus',
            'last_name' => 'Ruthven',
            'email' => 'cruthvenj@mediafire.com',
            'gender' => 'Male',
            'ip_address' => '67.95.120.203',
            'age' => 79,
            'comment' => 'consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante',
        ),
        array (
            'first_name' => 'Russ',
            'last_name' => 'Frampton',
            'email' => 'rframptonk@google.co.uk',
            'gender' => 'Male',
            'ip_address' => '153.188.61.227',
            'age' => 100,
            'comment' => 'libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac',
        ),
        array (
            'first_name' => 'Margaret',
            'last_name' => 'Colwell',
            'email' => 'mcolwelll@salon.com',
            'gender' => 'Female',
            'ip_address' => '101.176.199.166',
            'age' => 28,
            'comment' => 'in sagittis dui vel nisl duis ac nibh fusce lacus purus',
        ),
        array (
            'first_name' => 'Mick',
            'last_name' => 'Peddar',
            'email' => 'mpeddarm@yahoo.com',
            'gender' => 'Male',
            'ip_address' => '129.176.128.77',
            'age' => 90,
            'comment' => 'eu felis fusce posuere felis sed lacus morbi sem mauris',
        ),
        array (
            'first_name' => 'Akim',
            'last_name' => 'Van den Velden',
            'email' => 'avandenveldenn@mayoclinic.com',
            'gender' => 'Male',
            'ip_address' => '70.100.237.204',
            'age' => 8,
            'comment' => 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra',
        ),
        array (
            'first_name' => 'Belle',
            'last_name' => 'Eskell',
            'email' => 'beskello@reddit.com',
            'gender' => 'Female',
            'ip_address' => '12.91.114.190',
            'age' => 90,
            'comment' => 'cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet',
        ),
        array (
            'first_name' => 'Ariel',
            'last_name' => 'Scoyne',
            'email' => 'ascoynep@samsung.com',
            'gender' => 'Female',
            'ip_address' => '176.37.246.243',
            'age' => 92,
            'comment' => 'elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor',
        ),
        array (
            'first_name' => 'Pammie',
            'last_name' => 'Furmage',
            'email' => 'pfurmageq@craigslist.org',
            'gender' => 'Bigender',
            'ip_address' => '15.125.45.144',
            'age' => 81,
            'comment' => 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis',
        ),
        array (
            'first_name' => 'Quinta',
            'last_name' => 'Sterke',
            'email' => 'qsterker@ucoz.ru',
            'gender' => 'Female',
            'ip_address' => '143.106.118.166',
            'age' => 64,
            'comment' => 'ligula suspendisse ornare consequat lectus in est risus auctor sed tristique',
        ),
        array (
            'first_name' => 'Josey',
            'last_name' => 'Feaver',
            'email' => 'jfeavers@sciencedaily.com',
            'gender' => 'Female',
            'ip_address' => '225.197.183.109',
            'age' => 32,
            'comment' => 'condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan',
        ),
        array (
            'first_name' => 'Claybourne',
            'last_name' => 'Ilem',
            'email' => 'cilemt@goodreads.com',
            'gender' => 'Male',
            'ip_address' => '212.162.186.68',
            'age' => 77,
            'comment' => 'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus',
        ),
        array (
            'first_name' => 'Shay',
            'last_name' => 'MacColm',
            'email' => 'smaccolmu@feedburner.com',
            'gender' => 'Male',
            'ip_address' => '44.23.136.110',
            'age' => 13,
            'comment' => 'sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc',
        ),
        array (
            'first_name' => 'Rene',
            'last_name' => 'Fidian',
            'email' => 'rfidianv@amazonaws.com',
            'gender' => 'Female',
            'ip_address' => '193.138.73.95',
            'age' => 65,
            'comment' => 'odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla',
        ),
        array (
            'first_name' => 'Vicki',
            'last_name' => 'Chatenier',
            'email' => 'vchatenierw@so-net.ne.jp',
            'gender' => 'Female',
            'ip_address' => '55.175.238.11',
            'age' => 37,
            'comment' => 'mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas',
        ),
        array (
            'first_name' => 'Pascal',
            'last_name' => 'Harse',
            'email' => 'pharsex@wikimedia.org',
            'gender' => 'Male',
            'ip_address' => '91.42.189.99',
            'age' => 74,
            'comment' => 'pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est',
        ),
        array (
            'first_name' => 'Garv',
            'last_name' => 'Duchatel',
            'email' => 'gduchately@army.mil',
            'gender' => 'Male',
            'ip_address' => '225.227.84.210',
            'age' => 85,
            'comment' => 'libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut',
        ),
        array (
            'first_name' => 'Salomo',
            'last_name' => 'Waddilove',
            'email' => 'swaddilovez@miibeian.gov.cn',
            'gender' => 'Male',
            'ip_address' => '253.163.74.253',
            'age' => 86,
            'comment' => 'dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in',
        ),
        array (
            'first_name' => 'Shannan',
            'last_name' => 'Boswood',
            'email' => 'sboswood10@woothemes.com',
            'gender' => 'Male',
            'ip_address' => '190.88.232.25',
            'age' => 100,
            'comment' => 'nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat',
        ),
        array (
            'first_name' => 'Chlo',
            'last_name' => 'Stithe',
            'email' => 'cstithe11@biblegateway.com',
            'gender' => 'Female',
            'ip_address' => '163.243.147.113',
            'age' => 92,
            'comment' => 'potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa',
        ),
        array (
            'first_name' => 'Nappie',
            'last_name' => 'Crank',
            'email' => 'ncrank12@amazon.co.uk',
            'gender' => 'Male',
            'ip_address' => '169.243.74.237',
            'age' => 50,
            'comment' => 'vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non',
        ),
        array (
            'first_name' => 'Sharai',
            'last_name' => 'Clackson',
            'email' => 'sclackson13@ovh.net',
            'gender' => 'Female',
            'ip_address' => '173.190.214.253',
            'age' => 37,
            'comment' => 'justo aliquam quis turpis eget elit sodales scelerisque mauris sit',
        ),
        array (
            'first_name' => 'Jillene',
            'last_name' => 'Knappett',
            'email' => 'jknappett14@lulu.com',
            'gender' => 'Female',
            'ip_address' => '31.29.181.107',
            'age' => 10,
            'comment' => 'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis',
        ),
        array (
            'first_name' => 'Sansone',
            'last_name' => 'Freda',
            'email' => 'sfreda15@bigcartel.com',
            'gender' => 'Male',
            'ip_address' => '97.19.45.148',
            'age' => 86,
            'comment' => 'amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim',
        ),
        array (
            'first_name' => 'Portia',
            'last_name' => 'Sivorn',
            'email' => 'psivorn16@tmall.com',
            'gender' => 'Female',
            'ip_address' => '46.145.59.168',
            'age' => 4,
            'comment' => 'luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit',
        ),
        array (
            'first_name' => 'Garrard',
            'last_name' => 'Thornthwaite',
            'email' => 'gthornthwaite17@engadget.com',
            'gender' => 'Male',
            'ip_address' => '204.214.164.183',
            'age' => 7,
            'comment' => 'phasellus sit amet erat nulla tempus vivamus in felis eu sapien',
        ),
        array (
            'first_name' => 'Gillian',
            'last_name' => 'Shewen',
            'email' => 'gshewen18@symantec.com',
            'gender' => 'Female',
            'ip_address' => '152.141.45.2',
            'age' => 51,
            'comment' => 'phasellus in felis donec semper sapien a libero nam dui proin leo odio',
        ),
        array (
            'first_name' => 'Chane',
            'last_name' => 'Limbrick',
            'email' => 'climbrick19@nifty.com',
            'gender' => 'Male',
            'ip_address' => '209.110.242.127',
            'age' => 4,
            'comment' => 'sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam',
        ),
        array (
            'first_name' => 'Hammad',
            'last_name' => 'Medling',
            'email' => 'hmedling1a@vinaora.com',
            'gender' => 'Male',
            'ip_address' => '248.244.64.103',
            'age' => 12,
            'comment' => 'tristique est et tempus semper est quam pharetra magna ac consequat metus',
        ),
        array (
            'first_name' => 'Devlen',
            'last_name' => 'De Beauchemp',
            'email' => 'ddebeauchemp1b@weibo.com',
            'gender' => 'Male',
            'ip_address' => '79.243.196.107',
            'age' => 47,
            'comment' => 'a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique',
        ),
        array (
            'first_name' => 'Sterling',
            'last_name' => 'Brownstein',
            'email' => 'sbrownstein1c@reference.com',
            'gender' => 'Male',
            'ip_address' => '104.0.129.15',
            'age' => 69,
            'comment' => 'luctus rutrum nulla tellus in sagittis dui vel nisl duis',
        ),
        array (
            'first_name' => 'Gilberto',
            'last_name' => 'Seeger',
            'email' => 'gseeger1d@a8.net',
            'gender' => 'Male',
            'ip_address' => '209.228.62.5',
            'age' => 2,
            'comment' => 'vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum',
        ),
        array (
            'first_name' => 'Ianthe',
            'last_name' => 'Brymner',
            'email' => 'ibrymner1e@e-recht24.de',
            'gender' => 'Female',
            'ip_address' => '211.215.236.157',
            'age' => 93,
            'comment' => 'nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor',
        ),
        array (
            'first_name' => 'Gretal',
            'last_name' => 'Spink',
            'email' => 'gspink1f@cnet.com',
            'gender' => 'Female',
            'ip_address' => '13.163.123.0',
            'age' => 81,
            'comment' => 'sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus',
        ),
        array (
            'first_name' => 'Staffard',
            'last_name' => 'Burris',
            'email' => 'sburris1g@rambler.ru',
            'gender' => 'Male',
            'ip_address' => '89.53.54.8',
            'age' => 24,
            'comment' => 'non mi integer ac neque duis bibendum morbi non quam nec dui',
        ),
        array (
            'first_name' => 'Danit',
            'last_name' => 'Chessman',
            'email' => 'dchessman1h@elpais.com',
            'gender' => 'Female',
            'ip_address' => '199.158.77.30',
            'age' => 94,
            'comment' => 'ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam',
        ),
        array (
            'first_name' => 'Saudra',
            'last_name' => 'Secrett',
            'email' => 'ssecrett1i@last.fm',
            'gender' => 'Female',
            'ip_address' => '207.157.205.219',
            'age' => 40,
            'comment' => 'consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis',
        ),
        array (
            'first_name' => 'Billie',
            'last_name' => 'Olphert',
            'email' => 'bolphert1j@bluehost.com',
            'gender' => 'Male',
            'ip_address' => '34.147.229.171',
            'age' => 49,
            'comment' => 'diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna',
        ),
        array (
            'first_name' => 'Claretta',
            'last_name' => 'Veazey',
            'email' => 'cveazey1k@wiley.com',
            'gender' => 'Female',
            'ip_address' => '212.37.219.127',
            'age' => 19,
            'comment' => 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec',
        ),
        array (
            'first_name' => 'Zebulon',
            'last_name' => 'Highwood',
            'email' => 'zhighwood1l@delicious.com',
            'gender' => 'Male',
            'ip_address' => '25.6.123.77',
            'age' => 72,
            'comment' => 'nunc purus phasellus in felis donec semper sapien a libero',
        ),
        array (
            'first_name' => 'Roscoe',
            'last_name' => 'Brenton',
            'email' => 'rbrenton1m@bloglines.com',
            'gender' => 'Male',
            'ip_address' => '40.82.36.20',
            'age' => 100,
            'comment' => 'eu orci mauris lacinia sapien quis libero nullam sit amet',
        ),
        array (
            'first_name' => 'Normie',
            'last_name' => 'Rowberry',
            'email' => 'nrowberry1n@hatena.ne.jp',
            'gender' => 'Non-binary',
            'ip_address' => '76.174.211.117',
            'age' => 71,
            'comment' => 'amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui luctus',
        ),
        array (
            'first_name' => 'Clarance',
            'last_name' => 'Kivits',
            'email' => 'ckivits1o@gnu.org',
            'gender' => 'Agender',
            'ip_address' => '233.112.20.109',
            'age' => 95,
            'comment' => 'vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra',
        ),
        array (
            'first_name' => 'Guinevere',
            'last_name' => 'McGarry',
            'email' => 'gmcgarry1p@seesaa.net',
            'gender' => 'Female',
            'ip_address' => '36.168.214.181',
            'age' => 78,
            'comment' => 'sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta',
        ),
        array (
            'first_name' => 'Wenda',
            'last_name' => 'Skett',
            'email' => 'wskett1q@harvard.edu',
            'gender' => 'Female',
            'ip_address' => '41.198.102.120',
            'age' => 55,
            'comment' => 'placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id',
        ),
        array (
            'first_name' => 'Alia',
            'last_name' => 'McEvon',
            'email' => 'amcevon1r@cyberchimps.com',
            'gender' => 'Female',
            'ip_address' => '69.84.92.157',
            'age' => 74,
            'comment' => 'sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum',
        ),
        array (
            'first_name' => 'Madel',
            'last_name' => 'De la Harpe',
            'email' => 'mdelaharpe1s@apache.org',
            'gender' => 'Bigender',
            'ip_address' => '242.46.121.73',
            'age' => 50,
            'comment' => 'magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus',
        ),
        array (
            'first_name' => 'Codie',
            'last_name' => 'Tunaclift',
            'email' => 'ctunaclift1t@arizona.edu',
            'gender' => 'Male',
            'ip_address' => '247.0.89.102',
            'age' => 70,
            'comment' => 'etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id',
        ),
        array (
            'first_name' => 'Sharona',
            'last_name' => 'Bauser',
            'email' => 'sbauser1u@lycos.com',
            'gender' => 'Female',
            'ip_address' => '83.130.73.0',
            'age' => 27,
            'comment' => 'accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla',
        ),
        array (
            'first_name' => 'Rubin',
            'last_name' => 'Kinavan',
            'email' => 'rkinavan1v@vk.com',
            'gender' => 'Male',
            'ip_address' => '14.188.131.148',
            'age' => 46,
            'comment' => 'nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit',
        ),
        array (
            'first_name' => 'Morton',
            'last_name' => 'Pilsworth',
            'email' => 'mpilsworth1w@imdb.com',
            'gender' => 'Male',
            'ip_address' => '173.175.28.43',
            'age' => 41,
            'comment' => 'sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere',
        ),
        array (
            'first_name' => 'Gertrude',
            'last_name' => 'Pattini',
            'email' => 'gpattini1x@newsvine.com',
            'gender' => 'Female',
            'ip_address' => '189.132.202.22',
            'age' => 67,
            'comment' => 'odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id',
        ),
        array (
            'first_name' => 'Mollee',
            'last_name' => 'Measures',
            'email' => 'mmeasures1y@amazon.com',
            'gender' => 'Female',
            'ip_address' => '105.51.145.233',
            'age' => 26,
            'comment' => 'vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula',
        ),
        array (
            'first_name' => 'Florance',
            'last_name' => 'Bernardoux',
            'email' => 'fbernardoux1z@bbc.co.uk',
            'gender' => 'Female',
            'ip_address' => '91.24.48.169',
            'age' => 79,
            'comment' => 'eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan',
        ),
        array (
            'first_name' => 'Germain',
            'last_name' => 'Westmore',
            'email' => 'gwestmore20@samsung.com',
            'gender' => 'Male',
            'ip_address' => '202.165.139.12',
            'age' => 25,
            'comment' => 'curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum',
        ),
        array (
            'first_name' => 'Levey',
            'last_name' => 'Morehall',
            'email' => 'lmorehall21@sourceforge.net',
            'gender' => 'Male',
            'ip_address' => '239.84.161.91',
            'age' => 94,
            'comment' => 'curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae',
        ),
        array (
            'first_name' => 'Nathalie',
            'last_name' => 'Boosey',
            'email' => 'nboosey22@washingtonpost.com',
            'gender' => 'Female',
            'ip_address' => '180.166.237.69',
            'age' => 91,
            'comment' => 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus',
        ),
        array (
            'first_name' => 'Colin',
            'last_name' => 'Beckhouse',
            'email' => 'cbeckhouse23@vinaora.com',
            'gender' => 'Male',
            'ip_address' => '8.143.235.243',
            'age' => 88,
            'comment' => 'porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio',
        ),
        array (
            'first_name' => 'Janeczka',
            'last_name' => 'Bowley',
            'email' => 'jbowley24@paypal.com',
            'gender' => 'Female',
            'ip_address' => '216.211.91.184',
            'age' => 30,
            'comment' => 'imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat',
        ),
        array (
            'first_name' => 'Brigitta',
            'last_name' => 'Eddowes',
            'email' => 'beddowes25@bloomberg.com',
            'gender' => 'Female',
            'ip_address' => '67.152.6.114',
            'age' => 43,
            'comment' => 'in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec',
        ),
        array (
            'first_name' => 'Trenna',
            'last_name' => 'Mingasson',
            'email' => 'tmingasson26@hibu.com',
            'gender' => 'Female',
            'ip_address' => '233.212.109.245',
            'age' => 78,
            'comment' => 'ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit',
        ),
        array (
            'first_name' => 'Jorry',
            'last_name' => 'Dolley',
            'email' => 'jdolley27@reference.com',
            'gender' => 'Female',
            'ip_address' => '47.57.4.101',
            'age' => 14,
            'comment' => 'ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci',
        ),
        array (
            'first_name' => 'Reinhold',
            'last_name' => 'Cregeen',
            'email' => 'rcregeen28@reverbnation.com',
            'gender' => 'Male',
            'ip_address' => '20.228.24.59',
            'age' => 23,
            'comment' => 'turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam',
        ),
        array (
            'first_name' => 'Angelika',
            'last_name' => 'Whitworth',
            'email' => 'awhitworth29@studiopress.com',
            'gender' => 'Female',
            'ip_address' => '95.30.177.174',
            'age' => 31,
            'comment' => 'nec sem duis aliquam convallis nunc proin at turpis a pede',
        ),
        array (
            'first_name' => 'Galvin',
            'last_name' => 'Brodie',
            'email' => 'gbrodie2a@ihg.com',
            'gender' => 'Male',
            'ip_address' => '111.64.91.146',
            'age' => 33,
            'comment' => 'elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in',
        ),
        array (
            'first_name' => 'Pearce',
            'last_name' => 'Rogeron',
            'email' => 'progeron2b@gizmodo.com',
            'gender' => 'Male',
            'ip_address' => '5.249.252.73',
            'age' => 32,
            'comment' => 'odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius',
        ),
        array (
            'first_name' => 'Hayyim',
            'last_name' => 'Stuttman',
            'email' => 'hstuttman2c@google.cn',
            'gender' => 'Male',
            'ip_address' => '123.144.10.31',
            'age' => 32,
            'comment' => 'orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus',
        ),
        array (
            'first_name' => 'Tadio',
            'last_name' => 'Gilliat',
            'email' => 'tgilliat2d@1688.com',
            'gender' => 'Male',
            'ip_address' => '71.198.230.91',
            'age' => 43,
            'comment' => 'maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat',
        ),
        array (
            'first_name' => 'Fanchon',
            'last_name' => 'Veness',
            'email' => 'fveness2e@google.es',
            'gender' => 'Female',
            'ip_address' => '168.175.129.85',
            'age' => 32,
            'comment' => 'quisque ut erat curabitur gravida nisi at nibh in hac',
        ),
        array (
            'first_name' => 'Lilith',
            'last_name' => 'MacTrustam',
            'email' => 'lmactrustam2f@google.nl',
            'gender' => 'Female',
            'ip_address' => '142.200.8.92',
            'age' => 35,
            'comment' => 'vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac',
        ),
        array (
            'first_name' => 'Ariella',
            'last_name' => 'Comiam',
            'email' => 'acomiam2g@wikimedia.org',
            'gender' => 'Bigender',
            'ip_address' => '87.251.124.37',
            'age' => 90,
            'comment' => 'luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh',
        ),
        array (
            'first_name' => 'Cathyleen',
            'last_name' => 'Caught',
            'email' => 'ccaught2h@pen.io',
            'gender' => 'Female',
            'ip_address' => '222.80.163.189',
            'age' => 87,
            'comment' => 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi',
        ),
        array (
            'first_name' => 'Joshua',
            'last_name' => 'Whitcombe',
            'email' => 'jwhitcombe2i@mapquest.com',
            'gender' => 'Male',
            'ip_address' => '69.107.231.244',
            'age' => 11,
            'comment' => 'orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus',
        ),
        array (
            'first_name' => 'Torrey',
            'last_name' => 'Rudledge',
            'email' => 'trudledge2j@pinterest.com',
            'gender' => 'Male',
            'ip_address' => '151.190.65.249',
            'age' => 51,
            'comment' => 'convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in',
        ),
        array (
            'first_name' => 'Lianne',
            'last_name' => 'Iacopetti',
            'email' => 'liacopetti2k@exblog.jp',
            'gender' => 'Female',
            'ip_address' => '148.242.5.158',
            'age' => 28,
            'comment' => 'pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate',
        ),
        array (
            'first_name' => 'Bibi',
            'last_name' => 'Greendale',
            'email' => 'bgreendale2l@cisco.com',
            'gender' => 'Female',
            'ip_address' => '100.48.93.177',
            'age' => 64,
            'comment' => 'in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar',
        ),
        array (
            'first_name' => 'Isac',
            'last_name' => 'Fullerd',
            'email' => 'ifullerd2m@linkedin.com',
            'gender' => 'Male',
            'ip_address' => '126.124.98.175',
            'age' => 34,
            'comment' => 'vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes',
        ),
        array (
            'first_name' => 'Iago',
            'last_name' => 'Scurry',
            'email' => 'iscurry2n@last.fm',
            'gender' => 'Male',
            'ip_address' => '29.178.184.72',
            'age' => 28,
            'comment' => 'enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
        ),
        array (
            'first_name' => 'Kamila',
            'last_name' => 'Arnet',
            'email' => 'karnet2o@aol.com',
            'gender' => 'Female',
            'ip_address' => '0.152.204.30',
            'age' => 29,
            'comment' => 'accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel',
        ),
        array (
            'first_name' => 'Cletus',
            'last_name' => 'Veelers',
            'email' => 'cveelers2p@weibo.com',
            'gender' => 'Male',
            'ip_address' => '173.96.152.155',
            'age' => 48,
            'comment' => 'justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
        ),
        array (
            'first_name' => 'Kaine',
            'last_name' => 'Phlippsen',
            'email' => 'kphlippsen2q@guardian.co.uk',
            'gender' => 'Male',
            'ip_address' => '194.57.35.240',
            'age' => 53,
            'comment' => 'in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra',
        ),
        array (
            'first_name' => 'Sallie',
            'last_name' => 'Sinyard',
            'email' => 'ssinyard2r@opera.com',
            'gender' => 'Female',
            'ip_address' => '215.193.95.177',
            'age' => 8,
            'comment' => 'id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam',
        ),
    );
// return $data1;

$data2 = array(
    array (
        'first_name' => 'Iago',
        'last_name' => 'Scurry',
        'email' => 'iscurry2n@last.fm',
        'gender' => 'Male',
        'ip_address' => '29.178.184.72',
        'age' => 28,
        'comment' => array(
            array(
                'age' => 28,
                'message' => '1enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
            ),
            array(
                'age' => 28,
                'message' => '2enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
            ),
            array(
                'age' => 28,
                'message' => '3enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
            ),
            array(
                'age' => 28,
                'message' => '4enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
            ),
            array(
                'age' => 28,
                'message' => '5enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem',
            )
        ),
    ),
    array (
        'first_name' => 'Kamila',
        'last_name' => 'Arnet',
        'email' => 'karnet2o@aol.com',
        'gender' => 'Female',
        'ip_address' => '0.152.204.30',
        'age' => 29,
        'comment' => array(
            array(
                'age' => 29,
                'message' => 'accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel',
            )
        ),
    ),
    array (
        'first_name' => 'Cletus',
        'last_name' => 'Veelers',
        'email' => 'cveelers2p@weibo.com',
        'gender' => 'Male',
        'ip_address' => '173.96.152.155',
        'age' => 48,
        'comment' => array(
            array(
                'age' => 48,
                'message' => '1justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
            ),
            array(
                'age' => 48,
                'message' => '2justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
            ),
            array(
                'age' => 48,
                'message' => '3justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
            ),
            array(
                'age' => 48,
                'message' => '4justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
            ),
            array(
                'age' => 48,
                'message' => '5justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing',
            ),
        ),
    ),
    array (
        'first_name' => 'Kaine',
        'last_name' => 'Phlippsen',
        'email' => 'kphlippsen2q@guardian.co.uk',
        'gender' => 'Male',
        'ip_address' => '194.57.35.240',
        'age' => 53,
        'comment' => array(
            array(
                'age' => 53,
                'message' => 'in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra',
            )
        )
    ),
    array (
        'first_name' => 'Sallie',
        'last_name' => 'Sinyard',
        'email' => 'ssinyard2r@opera.com',
        'gender' => 'Female',
        'ip_address' => '215.193.95.177',
        'age' => 8,
        'comment' => array(
            array(
                'age' => 8,
                'message' => 'id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam',
            )
        )
    ),
);
return $data2;
}
}
