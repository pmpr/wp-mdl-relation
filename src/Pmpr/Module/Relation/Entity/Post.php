<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc57c5720c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation\Entity; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Relation\Manager\PostManager; use Pmpr\Module\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = Constants::mswoacegomcucaik; $this->title = __("\x50\157\163\x74\40\124\x79\x70\x65\x73", PR__MDL__RELATION); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\144\137\155\x65\x74\x61\137\x62\157\x78\145\x73", [$this, "\163\x69\x6b\x71\147\x67\167\x6d\x6d\x79\153\165\151\x79\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconInterface::awmsmqouyuugigus; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, bool $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\x2f\x28\x5b\136\57\x5d\53\x29\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\x69\156\144\145\170\x2e\x70\x68\x70\77\x70\x6f\x73\x74\137\x74\171\x70\145\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\x24\x6d\x61\x74\143\x68\145\163\x5b\61\x5d"; if ($kiyaqqoyagguscog) { $this->caokeucsksukesyo()->kuggecgwaickowwu()->wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); } $ucccueqywigcukcc .= "\x3f\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $mgkceomocowocqyo = $this->weysguygiseoukqw(Constants::osiogououyayqyck, "\156\157\x72\155\141\154"); if ($oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg)) { foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if ($mksyucucyswaukig) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\155\x65\164\141\x5f\142\x6f\170", Constants::okeuagwgwkmiokac => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => sprintf(__("\x52\x65\154\x61\164\x69\x6f\156\40\x77\x69\164\x68\x20\45\x73", PR__MDL__RELATION), $mksyucucyswaukig->label), Constants::cacismqswgaewkuu => $useksmwkuswkwcqg, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\171\x65\151\151\x79\161\x73\145\143\155\147\x6f\x79\x75"]]); } } } } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = $this->gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public function gagauoqcuosakeiq($qookweymeqawmcwo) { if (isset($qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) && $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]) { return $qookweymeqawmcwo[Constants::okeuagwgwkmiokac]; } $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\157\x6d\x65\x74\150\151\x6e\x67\40\x69\x73\40\167\x72\157\156\x67\x20\151\156\40\162\145\x6c\x61\164\x69\x6f\156\40\146\151\145\154\144\40\x72\x65\156\144\x65\162\x69\156\x67", PR__MDL__RELATION), "\162\x65\x6c\141\x74\x69\x6f\x6e", Constants::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return $this->caokeucsksukesyo()->gscioiumssogceuc()->imgymusqgccqsqqq($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if ($mcaisukqqyosuasi instanceof WP_Post) { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $oammesyieqmwuwyi = []; if ($post instanceof WP_Post) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); } return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($ymqmyyeuycgmigyo); } else { $mcaisukqqyosuasi = $this->caokeucsksukesyo()->kyqakacqeumicgag()->ssacaeeassumyuws($ymqmyyeuycgmigyo, Constants::ckmqoekmugkggeym, $sqeykgyoooqysmca); } return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; if ($gwiwsycaaqgwmewg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ayegqaqygsqsmews, Constants::moegqsqomeumiomk)) { $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{Constants::gygsikewooaciecc}, $gwiwsycaaqgwmewg); } return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(Constants::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(Constants::gqiasegggowomgie, Constants::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy(Setting $amakmumgguksgmum) : array { $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return [$amakmumgguksgmum->yyuwuqsiucweeoue(Constants::osiogououyayqyck)->mkmssscwmeekwgqo()->acauweqyyugwisqc([Constants::qayiiikwusguoask => __("\123\151\144\145\x62\x61\x72", PR__MDL__RELATION), Constants::ycusscwsoggmuweq => __("\102\x6f\x74\164\x6f\x6d", PR__MDL__RELATION)])->gswweykyogmsyawy(__("\x4d\x65\164\141\x42\157\x78\x20\120\x6f\x73\x69\x74\151\x6f\x6e", PR__MDL__RELATION))->gucwmccyimoagwcm(__("\x50\x6f\x73\151\164\151\157\156\40\x6f\146\x20\x6d\x65\164\141\x62\157\x78\40\x69\156\40\145\144\x69\x74\40\x73\143\x72\x65\x65\x6e\40\157\146\x20\x63\165\x73\164\157\x6d\40\160\157\163\x74\x20\164\x79\x70\145\x73\56", PR__MDL__RELATION)), $amakmumgguksgmum->qqmgmgasauucoago(self::uwoqgmuqskqcqsag())->gswweykyogmsyawy(__("\111\164\x65\155\x73", PR__MDL__RELATION))->omsoosuoikgueyke()->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__("\105\156\141\142\x6c\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->wcwmusaouiqaqeww(Constants::iycuamekoueuemoy)->gswweykyogmsyawy(__("\111\156\x76\x65\x72\163\x65\x20\x53\151\144\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\x49\x6d\141\147\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\101\x64\155\x69\x6e\40\120\141\x6e\x65\154\40\x4e\x61\155\x65", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::igecewwoemccgwsq)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x4f\162\x69\x67\x69\156\x20\120\x6f\x73\164\40\124\171\x70\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->mccagaqeagiikkec(Constants::gygsikewooaciecc)->acauweqyyugwisqc($sciomagaqmgggsiu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\104\145\163\164\x69\156\x61\x74\151\x6f\x6e\40\120\x6f\163\164\x20\x54\x79\160\145", PR__MDL__RELATION)))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::qgwwgcuuykqagamk)->gswweykyogmsyawy(__("\x4f\162\x69\x67\x69\x6e\40\120\157\x73\x74\x20\124\x79\160\145\x20\x54\x69\x74\x6c\145", PR__MDL__RELATION))->gucwmccyimoagwcm(sprintf("\x25\x73\72\x20\45\x73", $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\x4e\x6f\x74\151\x63\x65", PR__MDL__RELATION)), __("\127\151\154\x6c\40\x62\x65\40\x75\x73\x65\x64\40\x61\x73\40\163\x6c\165\x67\x20\164\x6f\157\x2e", PR__MDL__RELATION))))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(Constants::uyqakoogaigomqmq)->gswweykyogmsyawy(__("\104\145\x73\x74\151\156\x61\x74\151\x6f\156\x20\x50\157\x73\x74\40\124\x79\x70\145\40\124\x69\x74\154\145", PR__MDL__RELATION)))]; } }
