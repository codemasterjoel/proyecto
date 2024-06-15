<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Municipio::insert([
            ['id' => '101', 'nombre' => 'LIBERTADOR', 'municipio_id' => '101', 'estado_id' => '1'],
            ['id' => '2201', 'nombre' => 'ATURES', 'municipio_id' => '2201', 'estado_id' => '22'],
            ['id' => '2202', 'nombre' => 'ATABAPO', 'municipio_id' => '2202', 'estado_id' => '22'],
            ['id' => '2203', 'nombre' => 'MAROA', 'municipio_id' => '2203', 'estado_id' => '22'],
            ['id' => '2204', 'nombre' => 'RIO NEGRO', 'municipio_id' => '2204', 'estado_id' => '22'],
            ['id' => '2205', 'nombre' => 'AUTANA', 'municipio_id' => '2205', 'estado_id' => '22'],
            ['id' => '2206', 'nombre' => 'MANAPIARE', 'municipio_id' => '2206', 'estado_id' => '22'],
            ['id' => '2207', 'nombre' => 'ALTO ORINOCO', 'municipio_id' => '2207', 'estado_id' => '22'],
            ['id' => '201', 'nombre' => 'ANACO', 'municipio_id' => '201', 'estado_id' => '2'],
            ['id' => '202', 'nombre' => 'ARAGUA', 'municipio_id' => '202', 'estado_id' => '2'],
            ['id' => '203', 'nombre' => 'BOLIVAR', 'municipio_id' => '203', 'estado_id' => '2'],
            ['id' => '204', 'nombre' => 'MANUEL EZEQUIEL BRUZUAL', 'municipio_id' => '204', 'estado_id' => '2'],
            ['id' => '205', 'nombre' => 'JUAN MANUEL CAJIGAL', 'municipio_id' => '205', 'estado_id' => '2'],
            ['id' => '206', 'nombre' => 'PEDRO MARIA FREITES', 'municipio_id' => '206', 'estado_id' => '2'],
            ['id' => '207', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '207', 'estado_id' => '2'],
            ['id' => '208', 'nombre' => 'LIBERTAD', 'municipio_id' => '208', 'estado_id' => '2'],
            ['id' => '209', 'nombre' => 'FRANCISCO DE MIRANDA', 'municipio_id' => '209', 'estado_id' => '2'],
            ['id' => '210', 'nombre' => 'JOSE GREGORIO MONAGAS', 'municipio_id' => '210', 'estado_id' => '2'],
            ['id' => '211', 'nombre' => 'FERNANDO PEÑALVER', 'municipio_id' => '211', 'estado_id' => '2'],
            ['id' => '212', 'nombre' => 'SIMON RODRIGUEZ', 'municipio_id' => '212', 'estado_id' => '2'],
            ['id' => '213', 'nombre' => 'JUAN ANTONIO SOTILLO', 'municipio_id' => '213', 'estado_id' => '2'],
            ['id' => '214', 'nombre' => 'SAN JOSE DE GUANIPA', 'municipio_id' => '214', 'estado_id' => '2'],
            ['id' => '215', 'nombre' => 'GUANTA', 'municipio_id' => '215', 'estado_id' => '2'],
            ['id' => '216', 'nombre' => 'PIRITU', 'municipio_id' => '216', 'estado_id' => '2'],
            ['id' => '217', 'nombre' => 'DIEGO BAUTISTA URBANEJA', 'municipio_id' => '217', 'estado_id' => '2'],
            ['id' => '218', 'nombre' => 'CARVAJAL', 'municipio_id' => '218', 'estado_id' => '2'],
            ['id' => '219', 'nombre' => 'SANTA ANA', 'municipio_id' => '219', 'estado_id' => '2'],
            ['id' => '220', 'nombre' => 'MC GREGOR', 'municipio_id' => '220', 'estado_id' => '2'],
            ['id' => '221', 'nombre' => 'SAN JUAN DE CAPISTRANO', 'municipio_id' => '221', 'estado_id' => '2'],
            ['id' => '301', 'nombre' => 'ACHAGUAS', 'municipio_id' => '301', 'estado_id' => '3'],
            ['id' => '302', 'nombre' => 'MUÑOZ', 'municipio_id' => '302', 'estado_id' => '3'],
            ['id' => '303', 'nombre' => 'PAEZ', 'municipio_id' => '303', 'estado_id' => '3'],
            ['id' => '304', 'nombre' => 'PEDRO CAMEJO', 'municipio_id' => '304', 'estado_id' => '3'],
            ['id' => '305', 'nombre' => 'ROMULO GALLEGOS', 'municipio_id' => '305', 'estado_id' => '3'],
            ['id' => '306', 'nombre' => 'SAN FERNANDO', 'municipio_id' => '306', 'estado_id' => '3'],
            ['id' => '307', 'nombre' => 'BIRUACA', 'municipio_id' => '307', 'estado_id' => '3'],
            ['id' => '401', 'nombre' => 'ATANASIO GIRARDOT', 'municipio_id' => '401', 'estado_id' => '4'],
            ['id' => '402', 'nombre' => 'SANTIAGO MARIÑO', 'municipio_id' => '402', 'estado_id' => '4'],
            ['id' => '403', 'nombre' => 'JOSE FELIX RIBAS', 'municipio_id' => '403', 'estado_id' => '4'],
            ['id' => '404', 'nombre' => 'SAN CASIMIRO', 'municipio_id' => '404', 'estado_id' => '4'],
            ['id' => '405', 'nombre' => 'SAN SEBASTIAN', 'municipio_id' => '405', 'estado_id' => '4'],
            ['id' => '406', 'nombre' => 'SUCRE', 'municipio_id' => '406', 'estado_id' => '4'],
            ['id' => '407', 'nombre' => 'URDANETA', 'municipio_id' => '407', 'estado_id' => '4'],
            ['id' => '408', 'nombre' => 'ZAMORA', 'municipio_id' => '408', 'estado_id' => '4'],
            ['id' => '409', 'nombre' => 'LIBERTADOR', 'municipio_id' => '409', 'estado_id' => '4'],
            ['id' => '410', 'nombre' => 'JOSE ANGEL LAMAS', 'municipio_id' => '410', 'estado_id' => '4'],
            ['id' => '411', 'nombre' => 'BOLIVAR', 'municipio_id' => '411', 'estado_id' => '4'],
            ['id' => '412', 'nombre' => 'SANTOS MICHELENA', 'municipio_id' => '412', 'estado_id' => '4'],
            ['id' => '413', 'nombre' => 'MARIO BRICEÑO IRAGORRY', 'municipio_id' => '413', 'estado_id' => '4'],
            ['id' => '414', 'nombre' => 'TOVAR', 'municipio_id' => '414', 'estado_id' => '4'],
            ['id' => '415', 'nombre' => 'CAMATAGUA', 'municipio_id' => '415', 'estado_id' => '4'],
            ['id' => '416', 'nombre' => 'JOSE RAFAEL REVENGA', 'municipio_id' => '416', 'estado_id' => '4'],
            ['id' => '417', 'nombre' => 'FRANCISCO LINARES ALCANTARA', 'municipio_id' => '417', 'estado_id' => '4'],
            ['id' => '418', 'nombre' => 'OCUMARE DE LA COSTA DE ORO', 'municipio_id' => '418', 'estado_id' => '4'],
            ['id' => '501', 'nombre' => 'ARISMENDI', 'municipio_id' => '501', 'estado_id' => '5'],
            ['id' => '502', 'nombre' => 'BARINAS', 'municipio_id' => '502', 'estado_id' => '5'],
            ['id' => '503', 'nombre' => 'BOLIVAR', 'municipio_id' => '503', 'estado_id' => '5'],
            ['id' => '504', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '504', 'estado_id' => '5'],
            ['id' => '505', 'nombre' => 'OBISPOS', 'municipio_id' => '505', 'estado_id' => '5'],
            ['id' => '506', 'nombre' => 'PEDRAZA', 'municipio_id' => '506', 'estado_id' => '5'],
            ['id' => '507', 'nombre' => 'ROJAS', 'municipio_id' => '507', 'estado_id' => '5'],
            ['id' => '508', 'nombre' => 'SOSA', 'municipio_id' => '508', 'estado_id' => '5'],
            ['id' => '509', 'nombre' => 'ALBERTO ARVELO TORREALBA', 'municipio_id' => '509', 'estado_id' => '5'],
            ['id' => '510', 'nombre' => 'ANTONIO JOSE DE SUCRE', 'municipio_id' => '510', 'estado_id' => '5'],
            ['id' => '511', 'nombre' => 'CRUZ PAREDES', 'municipio_id' => '511', 'estado_id' => '5'],
            ['id' => '512', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '512', 'estado_id' => '5'],
            ['id' => '601', 'nombre' => 'CARONI', 'municipio_id' => '601', 'estado_id' => '6'],
            ['id' => '602', 'nombre' => 'CEDEÑO', 'municipio_id' => '602', 'estado_id' => '6'],
            ['id' => '603', 'nombre' => 'HERES', 'municipio_id' => '603', 'estado_id' => '6'],
            ['id' => '604', 'nombre' => 'PIAR', 'municipio_id' => '604', 'estado_id' => '6'],
            ['id' => '605', 'nombre' => 'ROSCIO', 'municipio_id' => '605', 'estado_id' => '6'],
            ['id' => '606', 'nombre' => 'SUCRE', 'municipio_id' => '606', 'estado_id' => '6'],
            ['id' => '607', 'nombre' => 'SIFONTES', 'municipio_id' => '607', 'estado_id' => '6'],
            ['id' => '608', 'nombre' => 'BOLIVARIANO ANGOSTURA', 'municipio_id' => '608', 'estado_id' => '6'],
            ['id' => '609', 'nombre' => 'GRAN SABANA', 'municipio_id' => '609', 'estado_id' => '6'],
            ['id' => '610', 'nombre' => 'EL CALLAO', 'municipio_id' => '610', 'estado_id' => '6'],
            ['id' => '611', 'nombre' => 'PADRE PEDRO CHIEN', 'municipio_id' => '611', 'estado_id' => '6'],
            ['id' => '701', 'nombre' => 'BEJUMA', 'municipio_id' => '701', 'estado_id' => '7'],
            ['id' => '702', 'nombre' => 'CARLOS ARVELO', 'municipio_id' => '702', 'estado_id' => '7'],
            ['id' => '703', 'nombre' => 'DIEGO IBARRA', 'municipio_id' => '703', 'estado_id' => '7'],
            ['id' => '704', 'nombre' => 'GUACARA', 'municipio_id' => '704', 'estado_id' => '7'],
            ['id' => '705', 'nombre' => 'MONTALBAN', 'municipio_id' => '705', 'estado_id' => '7'],
            ['id' => '706', 'nombre' => 'JUAN JOSE MORA', 'municipio_id' => '706', 'estado_id' => '7'],
            ['id' => '707', 'nombre' => 'PUERTO CABELLO', 'municipio_id' => '707', 'estado_id' => '7'],
            ['id' => '708', 'nombre' => 'SAN JOAQUIN', 'municipio_id' => '708', 'estado_id' => '7'],
            ['id' => '709', 'nombre' => 'VALENCIA', 'municipio_id' => '709', 'estado_id' => '7'],
            ['id' => '710', 'nombre' => 'MIRANDA', 'municipio_id' => '710', 'estado_id' => '7'],
            ['id' => '711', 'nombre' => 'LOS GUAYOS', 'municipio_id' => '711', 'estado_id' => '7'],
            ['id' => '712', 'nombre' => 'NAGUANAGUA', 'municipio_id' => '712', 'estado_id' => '7'],
            ['id' => '713', 'nombre' => 'SAN DIEGO', 'municipio_id' => '713', 'estado_id' => '7'],
            ['id' => '714', 'nombre' => 'LIBERTADOR', 'municipio_id' => '714', 'estado_id' => '7'],
            ['id' => '801', 'nombre' => 'ANZOATEGUI', 'municipio_id' => '801', 'estado_id' => '8'],
            ['id' => '802', 'nombre' => 'AUTONOMO TINAQUILLO', 'municipio_id' => '802', 'estado_id' => '8'],
            ['id' => '803', 'nombre' => 'GIRARDOT', 'municipio_id' => '803', 'estado_id' => '8'],
            ['id' => '804', 'nombre' => 'PAO DE SAN JUAN BAUTISTA', 'municipio_id' => '804', 'estado_id' => '8'],
            ['id' => '805', 'nombre' => 'RICAURTE', 'municipio_id' => '805', 'estado_id' => '8'],
            ['id' => '806', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '806', 'estado_id' => '8'],
            ['id' => '807', 'nombre' => 'TINACO', 'municipio_id' => '807', 'estado_id' => '8'],
            ['id' => '808', 'nombre' => 'LIMA BLANCO', 'municipio_id' => '808', 'estado_id' => '8'],
            ['id' => '809', 'nombre' => 'ROMULO GALLEGOS', 'municipio_id' => '809', 'estado_id' => '8'],
            ['id' => '2301', 'nombre' => 'TUCUPITA', 'municipio_id' => '2301', 'estado_id' => '23'],
            ['id' => '2302', 'nombre' => 'PEDERNALES', 'municipio_id' => '2302', 'estado_id' => '23'],
            ['id' => '2303', 'nombre' => 'ANTONIO DIAZ', 'municipio_id' => '2303', 'estado_id' => '23'],
            ['id' => '2304', 'nombre' => 'CASACOIMA', 'municipio_id' => '2304', 'estado_id' => '23'],
            ['id' => '901', 'nombre' => 'ACOSTA', 'municipio_id' => '901', 'estado_id' => '9'],
            ['id' => '902', 'nombre' => 'BOLIVAR', 'municipio_id' => '902', 'estado_id' => '9'],
            ['id' => '903', 'nombre' => 'BUCHIVACOA', 'municipio_id' => '903', 'estado_id' => '9'],
            ['id' => '904', 'nombre' => 'CARIRUBANA', 'municipio_id' => '904', 'estado_id' => '9'],
            ['id' => '905', 'nombre' => 'COLINA', 'municipio_id' => '905', 'estado_id' => '9'],
            ['id' => '906', 'nombre' => 'DEMOCRACIA', 'municipio_id' => '906', 'estado_id' => '9'],
            ['id' => '907', 'nombre' => 'FALCON', 'municipio_id' => '907', 'estado_id' => '9'],
            ['id' => '908', 'nombre' => 'FEDERACION', 'municipio_id' => '908', 'estado_id' => '9'],
            ['id' => '909', 'nombre' => 'MAUROA', 'municipio_id' => '909', 'estado_id' => '9'],
            ['id' => '910', 'nombre' => 'MIRANDA', 'municipio_id' => '910', 'estado_id' => '9'],
            ['id' => '911', 'nombre' => 'PETIT', 'municipio_id' => '911', 'estado_id' => '9'],
            ['id' => '912', 'nombre' => 'JOSE LAURENCIO SILVA', 'municipio_id' => '912', 'estado_id' => '9'],
            ['id' => '913', 'nombre' => 'ZAMORA', 'municipio_id' => '913', 'estado_id' => '9'],
            ['id' => '914', 'nombre' => 'DABAJURO', 'municipio_id' => '914', 'estado_id' => '9'],
            ['id' => '915', 'nombre' => 'MONSEÑOR ITURRIZA', 'municipio_id' => '915', 'estado_id' => '9'],
            ['id' => '916', 'nombre' => 'LOS TAQUES', 'municipio_id' => '916', 'estado_id' => '9'],
            ['id' => '917', 'nombre' => 'PIRITU', 'municipio_id' => '917', 'estado_id' => '9'],
            ['id' => '918', 'nombre' => 'UNION', 'municipio_id' => '918', 'estado_id' => '9'],
            ['id' => '919', 'nombre' => 'SAN FRANCISCO', 'municipio_id' => '919', 'estado_id' => '9'],
            ['id' => '920', 'nombre' => 'JACURA', 'municipio_id' => '920', 'estado_id' => '9'],
            ['id' => '921', 'nombre' => 'CACIQUE MANAURE', 'municipio_id' => '921', 'estado_id' => '9'],
            ['id' => '922', 'nombre' => 'PALMASOLA', 'municipio_id' => '922', 'estado_id' => '9'],
            ['id' => '923', 'nombre' => 'SUCRE', 'municipio_id' => '923', 'estado_id' => '9'],
            ['id' => '924', 'nombre' => 'URUMACO', 'municipio_id' => '924', 'estado_id' => '9'],
            ['id' => '925', 'nombre' => 'TOCOPERO', 'municipio_id' => '925', 'estado_id' => '9'],
            ['id' => '1001', 'nombre' => 'INFANTE', 'municipio_id' => '1001', 'estado_id' => '10'],
            ['id' => '1002', 'nombre' => 'JULIAN MELLADO', 'municipio_id' => '1002', 'estado_id' => '10'],
            ['id' => '1003', 'nombre' => 'SEBASTIAN FRANCISCO DE MIRANDA', 'municipio_id' => '1003', 'estado_id' => '10'],
            ['id' => '1004', 'nombre' => 'JOSE TADEO MONAGAS', 'municipio_id' => '1004', 'estado_id' => '10'],
            ['id' => '1005', 'nombre' => 'RIBAS', 'municipio_id' => '1005', 'estado_id' => '10'],
            ['id' => '1006', 'nombre' => 'JUAN GERMAN ROSCIO', 'municipio_id' => '1006', 'estado_id' => '10'],
            ['id' => '1007', 'nombre' => 'PEDRO ZARAZA', 'municipio_id' => '1007', 'estado_id' => '10'],
            ['id' => '1008', 'nombre' => 'CAMAGUAN', 'municipio_id' => '1008', 'estado_id' => '10'],
            ['id' => '1009', 'nombre' => 'SAN JOSE DE GUARIBE', 'municipio_id' => '1009', 'estado_id' => '10'],
            ['id' => '1010', 'nombre' => 'LAS MERCEDES', 'municipio_id' => '1010', 'estado_id' => '10'],
            ['id' => '1011', 'nombre' => 'EL SOCORRO', 'municipio_id' => '1011', 'estado_id' => '10'],
            ['id' => '1012', 'nombre' => 'ORTIZ', 'municipio_id' => '1012', 'estado_id' => '10'],
            ['id' => '1013', 'nombre' => 'SANTA MARIA DE IPIRE', 'municipio_id' => '1013', 'estado_id' => '10'],
            ['id' => '1014', 'nombre' => 'CHAGUARAMAS', 'municipio_id' => '1014', 'estado_id' => '10'],
            ['id' => '1015', 'nombre' => 'SAN GERONIMO DE GUAYABAL', 'municipio_id' => '1015', 'estado_id' => '10'],
            ['id' => '1101', 'nombre' => 'CRESPO', 'municipio_id' => '1101', 'estado_id' => '11'],
            ['id' => '1102', 'nombre' => 'IRIBARREN', 'municipio_id' => '1102', 'estado_id' => '11'],
            ['id' => '1103', 'nombre' => 'JIMENEZ', 'municipio_id' => '1103', 'estado_id' => '11'],
            ['id' => '1104', 'nombre' => 'MORAN', 'municipio_id' => '1104', 'estado_id' => '11'],
            ['id' => '1105', 'nombre' => 'PALAVECINO', 'municipio_id' => '1105', 'estado_id' => '11'],
            ['id' => '1106', 'nombre' => 'TORRES', 'municipio_id' => '1106', 'estado_id' => '11'],
            ['id' => '1107', 'nombre' => 'URDANETA', 'municipio_id' => '1107', 'estado_id' => '11'],
            ['id' => '1108', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '1108', 'estado_id' => '11'],
            ['id' => '1109', 'nombre' => 'SIMON PLANAS', 'municipio_id' => '1109', 'estado_id' => '11'],
            ['id' => '1201', 'nombre' => 'ALBERTO ADRIANI', 'municipio_id' => '1201', 'estado_id' => '12'],
            ['id' => '1202', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1202', 'estado_id' => '12'],
            ['id' => '1203', 'nombre' => 'ARZOBISPO CHACON', 'municipio_id' => '1203', 'estado_id' => '12'],
            ['id' => '1204', 'nombre' => 'CAMPO ELIAS', 'municipio_id' => '1204', 'estado_id' => '12'],
            ['id' => '1205', 'nombre' => 'GUARAQUE', 'municipio_id' => '1205', 'estado_id' => '12'],
            ['id' => '1206', 'nombre' => 'JULIO CESAR SALAS', 'municipio_id' => '1206', 'estado_id' => '12'],
            ['id' => '1207', 'nombre' => 'JUSTO BRICEÑO', 'municipio_id' => '1207', 'estado_id' => '12'],
            ['id' => '1208', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1208', 'estado_id' => '12'],
            ['id' => '1209', 'nombre' => 'SANTOS MARQUINA', 'municipio_id' => '1209', 'estado_id' => '12'],
            ['id' => '1210', 'nombre' => 'MIRANDA', 'municipio_id' => '1210', 'estado_id' => '12'],
            ['id' => '1211', 'nombre' => 'ANTONIO PINTO SALINAS', 'municipio_id' => '1211', 'estado_id' => '12'],
            ['id' => '1212', 'nombre' => 'OBISPO RAMOS DE LORA', 'municipio_id' => '1212', 'estado_id' => '12'],
            ['id' => '1213', 'nombre' => 'CARACCIOLO PARRA', 'municipio_id' => '1213', 'estado_id' => '12'],
            ['id' => '1214', 'nombre' => 'CARDENAL QUINTERO', 'municipio_id' => '1214', 'estado_id' => '12'],
            ['id' => '1215', 'nombre' => 'PUEBLO LLANO', 'municipio_id' => '1215', 'estado_id' => '12'],
            ['id' => '1216', 'nombre' => 'RANGEL', 'municipio_id' => '1216', 'estado_id' => '12'],
            ['id' => '1217', 'nombre' => 'RIVAS DAVILA', 'municipio_id' => '1217', 'estado_id' => '12'],
            ['id' => '1218', 'nombre' => 'SUCRE', 'municipio_id' => '1218', 'estado_id' => '12'],
            ['id' => '1219', 'nombre' => 'TOVAR', 'municipio_id' => '1219', 'estado_id' => '12'],
            ['id' => '1220', 'nombre' => 'TULIO FEBRES CORDERO', 'municipio_id' => '1220', 'estado_id' => '12'],
            ['id' => '1221', 'nombre' => 'PADRE NOGUERA', 'municipio_id' => '1221', 'estado_id' => '12'],
            ['id' => '1222', 'nombre' => 'ARICAGUA', 'municipio_id' => '1222', 'estado_id' => '12'],
            ['id' => '1223', 'nombre' => 'ZEA', 'municipio_id' => '1223', 'estado_id' => '12'],
            ['id' => '1301', 'nombre' => 'ACEVEDO', 'municipio_id' => '1301', 'estado_id' => '13'],
            ['id' => '1302', 'nombre' => 'BRION', 'municipio_id' => '1302', 'estado_id' => '13'],
            ['id' => '1303', 'nombre' => 'GUAICAIPURO', 'municipio_id' => '1303', 'estado_id' => '13'],
            ['id' => '1304', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '1304', 'estado_id' => '13'],
            ['id' => '1305', 'nombre' => 'LANDER', 'municipio_id' => '1305', 'estado_id' => '13'],
            ['id' => '1306', 'nombre' => 'PAEZ', 'municipio_id' => '1306', 'estado_id' => '13'],
            ['id' => '1307', 'nombre' => 'PAZ CASTILLO', 'municipio_id' => '1307', 'estado_id' => '13'],
            ['id' => '1308', 'nombre' => 'PLAZA', 'municipio_id' => '1308', 'estado_id' => '13'],
            ['id' => '1309', 'nombre' => 'SUCRE', 'municipio_id' => '1309', 'estado_id' => '13'],
            ['id' => '1310', 'nombre' => 'URDANETA', 'municipio_id' => '1310', 'estado_id' => '13'],
            ['id' => '1311', 'nombre' => 'ZAMORA', 'municipio_id' => '1311', 'estado_id' => '13'],
            ['id' => '1312', 'nombre' => 'CRISTOBAL ROJAS', 'municipio_id' => '1312', 'estado_id' => '13'],
            ['id' => '1313', 'nombre' => 'LOS SALIAS', 'municipio_id' => '1313', 'estado_id' => '13'],
            ['id' => '1314', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1314', 'estado_id' => '13'],
            ['id' => '1315', 'nombre' => 'SIMON BOLIVAR', 'municipio_id' => '1315', 'estado_id' => '13'],
            ['id' => '1316', 'nombre' => 'BARUTA', 'municipio_id' => '1316', 'estado_id' => '13'],
            ['id' => '1317', 'nombre' => 'CARRIZAL', 'municipio_id' => '1317', 'estado_id' => '13'],
            ['id' => '1318', 'nombre' => 'CHACAO', 'municipio_id' => '1318', 'estado_id' => '13'],
            ['id' => '1319', 'nombre' => 'EL HATILLO', 'municipio_id' => '1319', 'estado_id' => '13'],
            ['id' => '1320', 'nombre' => 'BUROZ', 'municipio_id' => '1320', 'estado_id' => '13'],
            ['id' => '1321', 'nombre' => 'PEDRO GUAL', 'municipio_id' => '1321', 'estado_id' => '13'],
            ['id' => '1401', 'nombre' => 'ACOSTA', 'municipio_id' => '1401', 'estado_id' => '14'],
            ['id' => '1402', 'nombre' => 'BOLIVAR', 'municipio_id' => '1402', 'estado_id' => '14'],
            ['id' => '1403', 'nombre' => 'CARIPE', 'municipio_id' => '1403', 'estado_id' => '14'],
            ['id' => '1404', 'nombre' => 'CEDEÑO', 'municipio_id' => '1404', 'estado_id' => '14'],
            ['id' => '1405', 'nombre' => 'EZEQUIEL ZAMORA', 'municipio_id' => '1405', 'estado_id' => '14'],
            ['id' => '1406', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1406', 'estado_id' => '14'],
            ['id' => '1407', 'nombre' => 'MATURIN', 'municipio_id' => '1407', 'estado_id' => '14'],
            ['id' => '1408', 'nombre' => 'PIAR', 'municipio_id' => '1408', 'estado_id' => '14'],
            ['id' => '1409', 'nombre' => 'PUNCERES', 'municipio_id' => '1409', 'estado_id' => '14'],
            ['id' => '1410', 'nombre' => 'SOTILLO', 'municipio_id' => '1410', 'estado_id' => '14'],
            ['id' => '1411', 'nombre' => 'AGUASAY', 'municipio_id' => '1411', 'estado_id' => '14'],
            ['id' => '1412', 'nombre' => 'SANTA BARBARA', 'municipio_id' => '1412', 'estado_id' => '14'],
            ['id' => '1413', 'nombre' => 'URACOA', 'municipio_id' => '1413', 'estado_id' => '14'],
            ['id' => '1601', 'nombre' => 'ARAURE', 'municipio_id' => '1601', 'estado_id' => '16'],
            ['id' => '1602', 'nombre' => 'ESTELLER', 'municipio_id' => '1602', 'estado_id' => '16'],
            ['id' => '1603', 'nombre' => 'GUANARE', 'municipio_id' => '1603', 'estado_id' => '16'],
            ['id' => '1604', 'nombre' => 'GUANARITO', 'municipio_id' => '1604', 'estado_id' => '16'],
            ['id' => '1605', 'nombre' => 'OSPINO', 'municipio_id' => '1605', 'estado_id' => '16'],
            ['id' => '1606', 'nombre' => 'PAEZ', 'municipio_id' => '1606', 'estado_id' => '16'],
            ['id' => '1607', 'nombre' => 'SUCRE', 'municipio_id' => '1607', 'estado_id' => '16'],
            ['id' => '1608', 'nombre' => 'TUREN', 'municipio_id' => '1608', 'estado_id' => '16'],
            ['id' => '1609', 'nombre' => 'MONSEÑO JOSE VICENTE DE UNDA', 'municipio_id' => '1609', 'estado_id' => '16'],
            ['id' => '1610', 'nombre' => 'AGUA BLANCA', 'municipio_id' => '1610', 'estado_id' => '16'],
            ['id' => '1611', 'nombre' => 'PAPELON', 'municipio_id' => '1611', 'estado_id' => '16'],
            ['id' => '1612', 'nombre' => 'SAN GENARO DE BOCONOITO', 'municipio_id' => '1612', 'estado_id' => '16'],
            ['id' => '1613', 'nombre' => 'SAN RAFAEL DE ONOTO', 'municipio_id' => '1613', 'estado_id' => '16'],
            ['id' => '1614', 'nombre' => 'SANTA ROSALIA', 'municipio_id' => '1614', 'estado_id' => '16'],
            ['id' => '1701', 'nombre' => 'ARISMENDI', 'municipio_id' => '1701', 'estado_id' => '17'],
            ['id' => '1702', 'nombre' => 'BENITEZ', 'municipio_id' => '1702', 'estado_id' => '17'],
            ['id' => '1703', 'nombre' => 'BERMUDEZ', 'municipio_id' => '1703', 'estado_id' => '17'],
            ['id' => '1704', 'nombre' => 'CAJIGAL', 'municipio_id' => '1704', 'estado_id' => '17'],
            ['id' => '1705', 'nombre' => 'MARIÑO', 'municipio_id' => '1705', 'estado_id' => '17'],
            ['id' => '1706', 'nombre' => 'MEJIA', 'municipio_id' => '1706', 'estado_id' => '17'],
            ['id' => '1707', 'nombre' => 'MONTES', 'municipio_id' => '1707', 'estado_id' => '17'],
            ['id' => '1708', 'nombre' => 'RIBERO', 'municipio_id' => '1708', 'estado_id' => '17'],
            ['id' => '1709', 'nombre' => 'SUCRE', 'municipio_id' => '1709', 'estado_id' => '17'],
            ['id' => '1710', 'nombre' => 'VALDEZ', 'municipio_id' => '1710', 'estado_id' => '17'],
            ['id' => '1711', 'nombre' => 'ANDRES ELOY BLANCO', 'municipio_id' => '1711', 'estado_id' => '17'],
            ['id' => '1712', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1712', 'estado_id' => '17'],
            ['id' => '1713', 'nombre' => 'ANDRES MATA', 'municipio_id' => '1713', 'estado_id' => '17'],
            ['id' => '1714', 'nombre' => 'BOLIVAR', 'municipio_id' => '1714', 'estado_id' => '17'],
            ['id' => '1715', 'nombre' => 'CRUZ SALMERON ACOSTA', 'municipio_id' => '1715', 'estado_id' => '17'],
            ['id' => '1801', 'nombre' => 'AYACUCHO', 'municipio_id' => '1801', 'estado_id' => '18'],
            ['id' => '1802', 'nombre' => 'BOLIVAR', 'municipio_id' => '1802', 'estado_id' => '18'],
            ['id' => '1803', 'nombre' => 'CAPACHO NUEVO', 'municipio_id' => '1803', 'estado_id' => '18'],
            ['id' => '1804', 'nombre' => 'CARDENAS', 'municipio_id' => '1804', 'estado_id' => '18'],
            ['id' => '1805', 'nombre' => 'JAUREGUI', 'municipio_id' => '1805', 'estado_id' => '18'],
            ['id' => '1806', 'nombre' => 'JUNIN', 'municipio_id' => '1806', 'estado_id' => '18'],
            ['id' => '1807', 'nombre' => 'LOBATERA', 'municipio_id' => '1807', 'estado_id' => '18'],
            ['id' => '1808', 'nombre' => 'SAN CRISTOBAL', 'municipio_id' => '1808', 'estado_id' => '18'],
            ['id' => '1809', 'nombre' => 'URIBANTE', 'municipio_id' => '1809', 'estado_id' => '18'],
            ['id' => '1810', 'nombre' => 'CORDOBA', 'municipio_id' => '1810', 'estado_id' => '18'],
            ['id' => '1811', 'nombre' => 'GARCIA DE HEVIA', 'municipio_id' => '1811', 'estado_id' => '18'],
            ['id' => '1812', 'nombre' => 'GUASIMOS', 'municipio_id' => '1812', 'estado_id' => '18'],
            ['id' => '1813', 'nombre' => 'MICHELENA', 'municipio_id' => '1813', 'estado_id' => '18'],
            ['id' => '1814', 'nombre' => 'LIBERTADOR', 'municipio_id' => '1814', 'estado_id' => '18'],
            ['id' => '1815', 'nombre' => 'PANAMERICANO', 'municipio_id' => '1815', 'estado_id' => '18'],
            ['id' => '1816', 'nombre' => 'PEDRO MARIA UREÑA', 'municipio_id' => '1816', 'estado_id' => '18'],
            ['id' => '1817', 'nombre' => 'SUCRE', 'municipio_id' => '1817', 'estado_id' => '18'],
            ['id' => '1818', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1818', 'estado_id' => '18'],
            ['id' => '1819', 'nombre' => 'FERNANDEZ FEO', 'municipio_id' => '1819', 'estado_id' => '18'],
            ['id' => '1820', 'nombre' => 'CAPACHO VIEJO', 'municipio_id' => '1820', 'estado_id' => '18'],
            ['id' => '1821', 'nombre' => 'SAMUEL DARIO MALDONADO', 'municipio_id' => '1821', 'estado_id' => '18'],
            ['id' => '1822', 'nombre' => 'SEBORUCO', 'municipio_id' => '1822', 'estado_id' => '18'],
            ['id' => '1823', 'nombre' => 'ANTONIO ROMULO COSTA', 'municipio_id' => '1823', 'estado_id' => '18'],
            ['id' => '1824', 'nombre' => 'FRANCISCO DE MIRANDA', 'municipio_id' => '1824', 'estado_id' => '18'],
            ['id' => '1825', 'nombre' => 'JOSE MARIA VARGA', 'municipio_id' => '1825', 'estado_id' => '18'],
            ['id' => '1826', 'nombre' => 'RAFAEL MARIA URDANETA', 'municipio_id' => '1826', 'estado_id' => '18'],
            ['id' => '1827', 'nombre' => 'SIMON RODRIGUEZ', 'municipio_id' => '1827', 'estado_id' => '18'],
            ['id' => '1828', 'nombre' => 'TORBES', 'municipio_id' => '1828', 'estado_id' => '18'],
            ['id' => '1829', 'nombre' => 'SAN JUDAS TADEO', 'municipio_id' => '1829', 'estado_id' => '18'],
            ['id' => '1901', 'nombre' => 'RAFAEL RANGEL', 'municipio_id' => '1901', 'estado_id' => '19'],
            ['id' => '1902', 'nombre' => 'BOCONO', 'municipio_id' => '1902', 'estado_id' => '19'],
            ['id' => '1903', 'nombre' => 'CARACHE', 'municipio_id' => '1903', 'estado_id' => '19'],
            ['id' => '1904', 'nombre' => 'ESCUQUE', 'municipio_id' => '1904', 'estado_id' => '19'],
            ['id' => '1905', 'nombre' => 'TRUJILLO', 'municipio_id' => '1905', 'estado_id' => '19'],
            ['id' => '1906', 'nombre' => 'URDANETA', 'municipio_id' => '1906', 'estado_id' => '19'],
            ['id' => '1907', 'nombre' => 'VALERA', 'municipio_id' => '1907', 'estado_id' => '19'],
            ['id' => '1908', 'nombre' => 'CANDELARIA', 'municipio_id' => '1908', 'estado_id' => '19'],
            ['id' => '1909', 'nombre' => 'MIRANDA', 'municipio_id' => '1909', 'estado_id' => '19'],
            ['id' => '1910', 'nombre' => 'MONTE CARMELO', 'municipio_id' => '1910', 'estado_id' => '19'],
            ['id' => '1911', 'nombre' => 'MOTATAN', 'municipio_id' => '1911', 'estado_id' => '19'],
            ['id' => '1912', 'nombre' => 'PAMPAN', 'municipio_id' => '1912', 'estado_id' => '19'],
            ['id' => '1913', 'nombre' => 'SAN RAFAEL DE CARVAJAL', 'municipio_id' => '1913', 'estado_id' => '19'],
            ['id' => '1914', 'nombre' => 'SUCRE', 'municipio_id' => '1914', 'estado_id' => '19'],
            ['id' => '1915', 'nombre' => 'ANDRES BELLO', 'municipio_id' => '1915', 'estado_id' => '19'],
            ['id' => '1916', 'nombre' => 'BOLIVAR', 'municipio_id' => '1916', 'estado_id' => '19'],
            ['id' => '1917', 'nombre' => 'JOSE FELIPE MARQUEZ CAÑIZALEZ', 'municipio_id' => '1917', 'estado_id' => '19'],
            ['id' => '1918', 'nombre' => 'JUAN VICENTE CAMPOS ELIAS', 'municipio_id' => '1918', 'estado_id' => '19'],
            ['id' => '1919', 'nombre' => 'LA CEIBA', 'municipio_id' => '1919', 'estado_id' => '19'],
            ['id' => '1920', 'nombre' => 'PAMPANITO', 'municipio_id' => '1920', 'estado_id' => '19'],
            ['id' => '2401', 'nombre' => 'VARGAS', 'municipio_id' => '2401', 'estado_id' => '24'],
            ['id' => '2001', 'nombre' => 'BOLIVAR', 'municipio_id' => '2001', 'estado_id' => '20'],
            ['id' => '2002', 'nombre' => 'BRUZUAL', 'municipio_id' => '2002', 'estado_id' => '20'],
            ['id' => '2003', 'nombre' => 'NIRGUA', 'municipio_id' => '2003', 'estado_id' => '20'],
            ['id' => '2004', 'nombre' => 'SAN FELIPE', 'municipio_id' => '2004', 'estado_id' => '20'],
            ['id' => '2005', 'nombre' => 'SUCRE', 'municipio_id' => '2005', 'estado_id' => '20'],
            ['id' => '2006', 'nombre' => 'URACHICHE', 'municipio_id' => '2006', 'estado_id' => '20'],
            ['id' => '2007', 'nombre' => 'PEÑA', 'municipio_id' => '2007', 'estado_id' => '20'],
            ['id' => '2008', 'nombre' => 'JOSE ANTONIO PAEZ', 'municipio_id' => '2008', 'estado_id' => '20'],
            ['id' => '2009', 'nombre' => 'LA TRINIDAD', 'municipio_id' => '2009', 'estado_id' => '20'],
            ['id' => '2010', 'nombre' => 'COCOROTE', 'municipio_id' => '2010', 'estado_id' => '20'],
            ['id' => '2011', 'nombre' => 'INDEPENDENCIA', 'municipio_id' => '2011', 'estado_id' => '20'],
            ['id' => '2012', 'nombre' => 'ARISTIDES BASTIDAS', 'municipio_id' => '2012', 'estado_id' => '20'],
            ['id' => '2013', 'nombre' => 'MANUEL MONGE', 'municipio_id' => '2013', 'estado_id' => '20'],
            ['id' => '2014', 'nombre' => 'VEROES', 'municipio_id' => '2014', 'estado_id' => '20'],
            ['id' => '2101', 'nombre' => 'BARALT', 'municipio_id' => '2101', 'estado_id' => '21'],
            ['id' => '2102', 'nombre' => 'SANTA RITA', 'municipio_id' => '2102', 'estado_id' => '21'],
            ['id' => '2103', 'nombre' => 'COLON', 'municipio_id' => '2103', 'estado_id' => '21'],
            ['id' => '2104', 'nombre' => 'MARA', 'municipio_id' => '2104', 'estado_id' => '21'],
            ['id' => '2105', 'nombre' => 'MARACAIBO', 'municipio_id' => '2105', 'estado_id' => '21'],
            ['id' => '2106', 'nombre' => 'MIRANDA', 'municipio_id' => '2106', 'estado_id' => '21'],
            ['id' => '2107', 'nombre' => 'INDIGENA BOLIVARIANO GUAJIRA', 'municipio_id' => '2107', 'estado_id' => '21'],
            ['id' => '2108', 'nombre' => 'MACHIQUES DE PERIJA', 'municipio_id' => '2108', 'estado_id' => '21'],
            ['id' => '2109', 'nombre' => 'SUCRE', 'municipio_id' => '2109', 'estado_id' => '21'],
            ['id' => '2110', 'nombre' => 'LA CAÑADA DE URDANETA', 'municipio_id' => '2110', 'estado_id' => '21'],
            ['id' => '2111', 'nombre' => 'LAGUNILLAS', 'municipio_id' => '2111', 'estado_id' => '21'],
            ['id' => '2112', 'nombre' => 'CATATUMBO', 'municipio_id' => '2112', 'estado_id' => '21'],
            ['id' => '2113', 'nombre' => 'ROSARIO DE PERIJA', 'municipio_id' => '2113', 'estado_id' => '21'],
            ['id' => '2114', 'nombre' => 'CABIMAS', 'municipio_id' => '2114', 'estado_id' => '21'],
            ['id' => '2115', 'nombre' => 'VALMORE RODRIGUEZ', 'municipio_id' => '2115', 'estado_id' => '21'],
            ['id' => '2116', 'nombre' => 'JESUS ENRIQUE LOSSADA', 'municipio_id' => '2116', 'estado_id' => '21'],
            ['id' => '2117', 'nombre' => 'ALMIRANTE PADILLA', 'municipio_id' => '2117', 'estado_id' => '21'],
            ['id' => '2118', 'nombre' => 'SAN FRANCISCO', 'municipio_id' => '2118', 'estado_id' => '21'],
            ['id' => '2119', 'nombre' => 'JESUS MARIA SEMPRUN', 'municipio_id' => '2119', 'estado_id' => '21'],
            ['id' => '2120', 'nombre' => 'FRANCISCO JAVIER PULGAR', 'municipio_id' => '2120', 'estado_id' => '21'],
            ['id' => '2121', 'nombre' => 'SIMON BOLIVAR', 'municipio_id' => '2121', 'estado_id' => '21'],
            ['id' => '1501', 'nombre' => 'ARISMENDI', 'municipio_id' => '1501', 'estado_id' => '15'],
            ['id' => '1502', 'nombre' => 'DIAZ', 'municipio_id' => '1502', 'estado_id' => '15'],
            ['id' => '1503', 'nombre' => 'GOMEZ', 'municipio_id' => '1503', 'estado_id' => '15'],
            ['id' => '1504', 'nombre' => 'MANEIRO', 'municipio_id' => '1504', 'estado_id' => '15'],
            ['id' => '1505', 'nombre' => 'MARCANO', 'municipio_id' => '1505', 'estado_id' => '15'],
            ['id' => '1506', 'nombre' => 'MARIÑO', 'municipio_id' => '1506', 'estado_id' => '15'],
            ['id' => '1507', 'nombre' => 'PENINSULA DE MACANAO', 'municipio_id' => '1507', 'estado_id' => '15'],
            ['id' => '1508', 'nombre' => 'VILLALBA', 'municipio_id' => '1508', 'estado_id' => '15'],
            ['id' => '1509', 'nombre' => 'TUBORES', 'municipio_id' => '1509', 'estado_id' => '15'],
            ['id' => '1510', 'nombre' => 'ANTOLIN DEL CAMPO', 'municipio_id' => '1510', 'estado_id' => '15'],
            ['id' => '1511', 'nombre' => 'GARCIA', 'municipio_id' => '1511', 'estado_id' => '15']
        ]);
    }
}
