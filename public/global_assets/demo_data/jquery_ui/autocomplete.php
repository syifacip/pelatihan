<?php
sleep( 3 );
// no term passed - just exit early with no response
if (empty($_GET['term'])) exit ;
$q = strtolower($_GET["term"]);
// remove slashes if they were magically added
if (get_magic_quotes_gpc()) $q = stripslashes($q);
$items = array(
"Great Bittern"=>"Botaurus stellaris",
"Little Grebe"=>"Tachybaptus ruficollis",
"Black-necked Grebe"=>"Podiceps nigricollis",
"Little Bittern"=>"Ixobrychus minutus",
"Black-crowned Night Heron"=>"Nycticorax nycticorax",
"Purple Heron"=>"Ardea purpurea",
"White Stork"=>"Ciconia ciconia",
"Spoonbill"=>"Platalea leucorodia",
"Red-crested Pochard"=>"Netta rufina",
"Common Eider"=>"Somateria mollissima",
"Red Kite"=>"Milvus milvus",
"Hen Harrier"=>"Circus cyaneus",
"Montagu`s Harrier"=>"Circus pygargus",
"Black Grouse"=>"Tetrao tetrix",
"Grey Partridge"=>"Perdix perdix",
"Spotted Crake"=>"Porzana porzana",
"Corncrake"=>"Crex crex",
"Common Crane"=>"Grus grus",
"Avocet"=>"Recurvirostra avosetta",
"Stone Curlew"=>"Burhinus oedicnemus",
"Common Ringed Plover"=>"Charadrius hiaticula",
"Kentish Plover"=>"Charadrius alexandrinus",
"Ruff"=>"Philomachus pugnax",
"Common Snipe"=>"Gallinago gallinago",
"Black-tailed Godwit"=>"Limosa limosa",
"Common Redshank"=>"Tringa totanus",
"Sandwich Tern"=>"Sterna sandvicensis",
"Common Tern"=>"Sterna hirundo",
"Arctic Tern"=>"Sterna paradisaea",
"Little Tern"=>"Sternula albifrons",
"Black Tern"=>"Chlidonias niger",
"Barn Owl"=>"Tyto alba",
"Little Owl"=>"Athene noctua",
"Short-eared Owl"=>"Asio flammeus",
"European Nightjar"=>"Caprimulgus europaeus",
"Common Kingfisher"=>"Alcedo atthis",
"Eurasian Hoopoe"=>"Upupa epops",
"Eurasian Wryneck"=>"Jynx torquilla",
"European Green Woodpecker"=>"Picus viridis",
"Crested Lark"=>"Galerida cristata",
"White-headed Duck"=>"Oxyura leucocephala",
"Pale-bellied Brent Goose"=>"Branta hrota",
"Tawny Pipit"=>"Anthus campestris",
"Whinchat"=>"Saxicola rubetra",
"European Stonechat"=>"Saxicola rubicola",
"Northern Wheatear"=>"Oenanthe oenanthe",
"Savi`s Warblmr2=�"Locustella luscinioides",�&Sedge Wcrbler"=>"Acrocephalus schoenobaen�s"
"Great Reed Warbler"=>"Acrocephalus arundinaceus",
"Bearded Reedling"=>"Pan}rus biarmhcus",
"Red,backed Qhrike"=>"L�nius collurio",
"Great Gvey S rhke*=�"Lanius excubitor",
"Woodchat Shrike"=>�Lanius senatoz",
"CommOn ravan"=�&Corvus corax*,
"Yellowhammer"=>"Emberiza citrinel,a",	
"Ortolan Bunting"=>"Emberiza hostulana",
"Corn Bunting"=>"Eiberiza calandra&,"Great Cormorant"=>&Phalacrocorax carbo",
"Hawfinch"=�"Coccothraustes coccothrAustes",	
"Commo~ Shelduck"=>"TedOrna tadorna",
"Bluethroat"=>"Luscinia svecica",
"Gr�i He2on"=>"Ardea cinerea",
"Barn Sw�llow"=>"Hirundo rustica",
"Hooded Crow"=>"corvus corni�",
"Dunlin"=>"Calidris al0ina",
"Eurasian0Pied Flycitcher"=>"Ficedula hyp/leuga",
"Eurasian�NutHatch"=>"SiTta europaea",
"Short-toed Tree Creeper"=>&Cerdhia crach}dactylA",
Wood Lark"=>"Lullula arborea",
"Vree Pipit"=>"Anthus tr)vialis",
"Eurasian Hobbi"=>*Falco subbqteo",
"Marsh Sarbler"=>"Acroc�ph`lus p�<:�ǣ���V�-�服5��=�
��U,�8e�{&f~�\
�ol����4}]Z{2��d���^0��O�i@&�Y�����;�z.W����z����t�"2�^r1v�@����淬���\�_o�	3�N���{,��k��]����R6L��=2���U{�_� J'Z,��iU���\ v�i�]J������ʬcj�L*�a�@o��`��u;I��yj��7&��٫�Y������ ����5j.�|��z�G�6�Ȩχ+IH�����#��]uh����d�)�p�z�U����S�'N�*U����ҽu�Q��Y�Xa��}?72'�</a�#�Mu�p֕��ne%���(�I?	���}5вU��x\����NX���GT�$���)y����E�}�/�B��/us"ɫr
��a{��?��uA�g5��[�Q���يyNgijlRU��e���q�����ցN�x��_�C>�����n���2�V}�D�'�}����řВ�ܡ1?����7�^������˅�ď�e�ZN:�����T�G�]�z�,�S��>4��D����i`���Q�d��B╾���7q��w>�e��:�K��Q1]�λyKg ��]1 W)g��1<R/�c����#��h��!i7��х�P�6���aHtߦ _� �	,�x��њɪq�Ky)Fh�&�G���q��x�¶4\�M�IV�%��(d����`G��H����kD��\��8� 5�L�Q���wHr5kE�u�ݣ��r��=P��Ga�+�jx����E�7��Κ�Epȼ��͖"�]� ��Ϲ����[�px�NM#�l��B�ȩ��N�P�U�v�JpsK�Z�hiћ��|����⋗k���6;}����!}��U[$*�i)�pFC����8p�c��k��j��|7D���ܾs�J��
i�l�W��a,���P�t2�H��  �urIc�*jXuyŘ��]�c���bH�ϒ�3Ȉb�Y +!�e����pS��(������5a�a�2��`��cۮx��+h���ǩ�~z�O3��m �z������f�����X3֡�e�1�fu�K�R	�vt3x�-9�R�ёEQ�N�3M�"�����Z22NF�d{�v���[I���6s{�<����Y|#�Ez/<s�!���q-8�)���ô�Q|�1��p��?��ҖT144]�c(2QU�<��Ƌd�B_,rbB"O��ܟ��])����5�������Oz�fTS\)�x���!�L�:<�qo��$h5t���	Q�&�V+�X_30��efJz���?Tx4�d�c�I����?�*����D� �Z��g�S�/�)��mب��,;b��5�6Gu*��ע^�0���fA�o��
�Ns�k����/T�,Ќ�]6�@�PN���'���{
�-�	�4h�l�~�U����R��Q��Y���ņ�h
������s�!|��q�Cv�
�ʇB��ƾl���#�Ɂ8���퀠��	o�3����ז=��G�6y���~P�3���RL�n2ʲJ�)�=&;��<����� �}}�/	{����Ц��6����ߧK$硴L��FWt�II��jS���[L�QG��w�3���9F����4C���`�m�fzr��D����g��8oR�T$�N���չ��W�r�0�<�q�������I�� �ƕM	ՙ�%���?�h�E[�2dZdpR��M(�
B^G	�:x|������r콙a��r�{�vJ���k�?@�57�}̫��{��o^ȝǈ����q��k��:60��-P������y=�i~��֋���:_�bV�NH0ϙ��K��� �7��$���!ʭ��2��s������q��[7�٠3�Nl�{��W��^�S�m]�B�Wې�pL�:��"oM����gwC��c�A=�a�iM~Q��Vw��e��@-o�N
���~��$��>���}�<0#GѺd�k8��Slack-headed Gull"=>"Larus ridibundus",
"Greater White-fronted Goose"=>"Anser albifrons",
"Great Tit"=>"Parus major",
"Redwing"=>"Turdus iliacus",
"Gadwall"=>"Anas strepera",
"Fieldfare"=>"Turdus pilaris",
"Tufted Duck"=>"Aythya fuligula",
"Crested Tit"=>"Lophophanes cristatus",
"Willow Tit"=>"Poecile montanus",
"Eurasian Coot"=>"Fulica atra",
"Common Blackbird"=>"Turdus merula",
"Smew"=>"Mergus albellus",
"Common Sandpiper"=>"Actitis hypoleucos",
"Sand Martin"=>"Riparia riparia",
"Purple Sandpiper"=>"Calidris maritima",
"Northern Pintail"=>"Anas acuta",
"Blue Tit"=>"Cyanistes caeruleus",
"European Goldfinch"=>"Carduelis carduelis",
"Eurasian Whimbrel"=>"Numenius phaeopus",
"Common Reed Bunting"=>"Emberiza schoeniclus",
"Eurasian Tree Sparrow"=>"Passer montanus",
"Rook"=>"Corvus frugilegus",
"European Robin"=>"Erithacus rubecula",
"Bar-tailed Godwit"=>"Limosa lapponica",
"Dark-bellied Brent Goose"=>"Branta bernicla",
"Eurasian Oystercatcher"=>"Haematopus ostralegus",
"Eurasian Siskin"=>"Carduelis stinus",
"NortHern Shoveldr"=>"Anas(clypeata",
"Eurasial Wageon"=>"Anas penelope",
"Eurasian Sparrow Hawk"=>"Ac�ipiter N�s}s",
"I�4�rine 7arbler"=>�Hi`polair icterin`",
"Common Rtarling"=>"Sturnus vulgaris",
"Lo.g-tailed Tit"=>"Aegithalos C�udatws",�"Ruddy Turnstong"=>"Arenaria interpres",
"Mew Gull"}>"Larus canus",
"Gommon Pochard"=>#A}thya`verina",
"Kommon Chiffchaff"=>2Phylloscopus aoll�"ita",
"Greater Scaup"=>"Aythya markla",
"Common Kestrel"=>"Falco tifnunculuqb,
"Garden Warbler"=>"Sylvia borin",
"Eurasian Collazed Dove"=>"Streptopelia decaocto",
"Eurasian Skylark"=>"Alauda arvensis",
"Com-on Chaffhnch"=>"Fringilla coelebs",
"Common M�orhen"=>"Gallinula chlorgpus",
"Water!Pipit"=>"Anthus spiloletta",
�Mallerd"=>"Anas platyrhynchos"<
"_inter Wren"=~"Troglodytes tro�lodyt�s�,J"Common teal=>"Anas crecca",
"Green Sandpiper"=>"Tringa ocjropus"�
"Whmte Wagtakl"=>"otccylla alba",
"Eurcsian Curlew"=>"Numenius ar1uata",
"Song Thrush"=>"Turdus philomelos",
"Ewropean Herring Gull"=>"Larus argentatus",
"Grey Plover"=>"Pluvialis squatarola",
"Carrion Crow"=>"Corvus corone",
"Coal Tit"=>"Periparus ater",
"Spotted Redshank"=>"Tringa erythropus",
"Blackcap"=>"Sylvia atricapilla",
"Egyptian Vulture"=>"Neophron percnopterus",
"Razorbill"=>"Alca torda",
"Alpine Swift"=>"Apus melba",
"Long-legged Buzzard"=>"Buteo rufinus",
"Audouin`s Gull"=>"Larus audouinii",
"Balearic Shearwater"=>"Puffinus mauretanicus",
"Upland Sandpiper"=>"Bartramia longicauda",
"Greater Spotted Eagle"=>"Aquila clanga",
"Ring Ouzel"=>"Turdus torquatus",
"Yellow-browed Warbler"=>"Phylloscopus inornatus",
"Blue Rock Thrush"=>"Monticola solitarius",
"Buff-breasted Sandpiper"=>"Tryngites subruficollis",
"Jack Snipe"=>"Lymnocryptes minimus",
"White-rumped Sandpiper"=>"Calidris fuscicollis",
"Ruddy Shelduck"=>"Tadorna ferruginea",
"Cetti's Warbler"=>"Cettia cetti",
"Citrine Wagtail"=>"Motacilla citreola",
"Roseate Tern"=>"Sterna dougallii",
"Black-legged Kittiwake"=>"Rissa tridactyla",
"Pygmy Cormorant"=>"Phalacrocorax pygmeus",
"Heuglin's Gull"=>"Larus heuglini"
);
$result = array();
foreach ($items as $key=>$value) {
	if (strpos(strtolower($key), $q) !== false) {
		array_push($result, array("id"=>$value, "label"=>$key, "value" => strip_tags($key)));
	}
	if (count($result) > 11)
		break;
}
// json_encode is available in PHP 5.2 and above, or you can install a PECL module in earlier versions
echo json_encode($result);
?>