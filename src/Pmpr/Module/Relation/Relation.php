<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634be2b89fc17             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Relation; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Relation\Entity\Post; use Pmpr\Module\Relation\Entity\Term; use Pmpr\Module\Relation\Manager\PostManager; class Relation extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x52\x65\x6c\x61\x74\151\157\156", PR__MDL__RELATION); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto kiwqkcaekqqyuegq; } $this->iemaakgqgqosiecm(); parent::__construct(); kiwqkcaekqqyuegq: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw(self::esgskoesuqecuuwg . "\141\144\144\137\x64\145\x66\141\165\154\x74\137\x69\164\x65\155\x73"), [$this, "\x63\x79\153\x79\x6b\x67\x65\171\x6d\x6b\x65\x63\x6d\157\x65\153"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw(self::esgskoesuqecuuwg . "\147\145\x74\x5f\160\x6f\163\164\x73"), [$this, "\151\171\163\x73\147\157\151\167\x67\x77\x79\x67\145\141\x63\147"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\145\x74\x5f\166\x61\154\x69\144\137\x72\x65\x6c\x61\164\x69\x6f\156\x73"), [$this, "\163\x77\147\145\167\141\x6f\167\153\167\151\x69\x73\x6b\x6b\143"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\145\x74\137\160\x6f\163\x74\163\137\x61\162\x67\x73"), [$this, "\x6d\x73\x79\171\x71\x61\x69\x63\157\x65\161\161\143\157\x6d\x63"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw(self::esgskoesuqecuuwg . "\147\x65\x74\137\x70\157\163\164\x5f\142\171\x5f\155\145\164\x61\x6b\145\171"), [$this, "\153\157\x77\145\x65\163\143\x6d\x69\x63\157\x6b\x75\157\x6f\x6b"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto quwcqmyokicssyew; } Post::symcgieuakksimmu(); Asset::symcgieuakksimmu(); goto iqcogmsguwoikame; quwcqmyokicssyew: Ajax::symcgieuakksimmu(); iqcogmsguwoikame: } public function koweescmicokuook($ayegqaqygsqsmews, $gwiwsycaaqgwmewg = null) { if (!$gwiwsycaaqgwmewg) { goto gimmuoqwckiseaik; } $ayegqaqygsqsmews = $this->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); gimmuoqwckiseaik: return $ayegqaqygsqsmews; } public function cykykgeymkecmoek($oammesyieqmwuwyi = []) { if (!$oammesyieqmwuwyi) { goto omugkkesagcyagmk; } $uwomkgseoiegeume = []; $amakmumgguksgmum = Post::uwoqgmuqskqcqsag(); $cmaccwokqweqweqi = $this->iucouyoswwsakqyc($amakmumgguksgmum); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { $kcguiwgkqgcuyiku = ManipulateArray::get($igqsaukqcqscimok, self::gygsikewooaciecc); $iakkeikwceeomgyq = ManipulateArray::get($igqsaukqcqscimok, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($igqsaukqcqscimok, self::moegqsqomeumiomk); if (!(!isset($cmaccwokqweqweqi[$gwiwsycaaqgwmewg]) && $uusmaiomayssaecw && $kcguiwgkqgcuyiku && $iakkeikwceeomgyq)) { goto ayyweymyuuiauamo; } $uwomkgseoiegeume[] = wp_parse_args($igqsaukqcqscimok, [self::ascagqcquwgmygkm => $uusmaiomayssaecw, self::iccwcygaeqmomooo => self::ON, self::iycuamekoueuemoy => true]); ayyweymyuuiauamo: yqykqysmiquwoasu: } cmqucgoewuyieoyk: if (!$uwomkgseoiegeume) { goto mosqsmqimqgqoase; } $this->kmuweyayaqoeqiyw()->eiaacegkigqiwawg($amakmumgguksgmum, array_values(array_merge($cmaccwokqweqweqi, $uwomkgseoiegeume))); mosqsmqimqgqoase: omugkkesagcyagmk: } public function iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { if (!($mcaisukqqyosuasi && $ccamueccusigaaio && $gwiwsycaaqgwmewg)) { goto ygcsmkuycoagwyou; } $wyoiwuqokyeeuguk = PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); ygcsmkuycoagwyou: return $wyoiwuqokyeeuguk; } public function msyyqaicoeqqcomc($ywmkwiwkosakssii = []) { if (!(isset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]) && !isset($ywmkwiwkosakssii[self::eqomgewoayseioos]))) { goto iggyqogweyosuikc; } $ayegqaqygsqsmews = $ywmkwiwkosakssii[self::ggsoiqkcasskkeae]; if (!$ayegqaqygsqsmews) { goto kqksuugcgsyeoayy; } [$iakkeikwceeomgyq, $oammesyieqmwuwyi] = PostManager::awiyyawscoigiuae($ayegqaqygsqsmews, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywmkwiwkosakssii[self::eqomgewoayseioos] = $oammesyieqmwuwyi; $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $iakkeikwceeomgyq; unset($ywmkwiwkosakssii[self::ggsoiqkcasskkeae]); kqksuugcgsyeoayy: iggyqogweyosuikc: return $ywmkwiwkosakssii; } public function swgewaowkwiiskkc($gsgwomokyuwmqqkg = [], $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = (array) ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qayiiikwusguoask => null, self::mgsccwumkcawaqcy => Post::uwoqgmuqskqcqsag(), self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return $this->gyykaeouuskoqiye($ywmkwiwkosakssii[self::mgsccwumkcawaqcy], $ywmkwiwkosakssii[self::qayiiikwusguoask], $ywmkwiwkosakssii[self::aisguagukaewucii]); } }
