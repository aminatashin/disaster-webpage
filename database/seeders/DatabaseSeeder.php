<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\disasterModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        disasterModel::create( [
            'id'=>100,
            'title'=>'Nepal Earthquake 2015',
            'explanation'=>'Following Nepal earthquake that struck near the Kathmandu Valley in Nepal in April and May 2015, killing more than 9,000 people and injuring more than 23,000 while leaving hundreds of thousands homeless, ICCROM, ICOMOS, ICOM, the Smithsonian, in partnership with the Nepal Department of Archaeology helped assemble a team of professionals that responded to the disaster and assisted in the recovery efforts for movable and immovable cultural heritage.
            Together, they conducted a coordinated damage assessment followed by on-site training for emergency documentation, salvage, stabilization, and storage of built heritage and architectural fagrments. The team worked with volunteers from the community, including staff of the Department of Archaeology, the Nepalese Army and Police, engineers and craftsmen, young volunteers, and aid workers.
            ',
            'picture'=>'img/napal1.jpg'
        ]);
        disasterModel::create( [
            'id'=>101,
            'title'=>'Bhutan Earthquake 2009',
            'explanation'=>'On 21st September 2009, eastern part of Bhutan was hit by an earthquake of Magnitude 6.1 , affecting 14 districts. According to updated reports of the Royal Government of Bhutan (RGOB), 12 people died and 47 were injured due to this earthquake.  The event caused severe damages to heritage and cultural properties in the Mongar and Trashigang Dzongkhags (districts) in the eastern part of Bhutan.  Apart from these two, twelve other Dzongkhags (districts) were also moderately affected. In response to the appeal made by the Division for Heritage Conservation, Department of Culture, UNESCO organized a post-earthquake technical mission to Bhutan from 23 to 30 November 2009 in order to further assess the cause of the structural failures of historic buildings and vernacular houses and to identify the strategies for interventions in these structures to prepare them for future earthquakes through a long-term plan for the protection of cultural properties. During the mission, visit to seven heritage sites in the worst affected districts of Mongar and Trashigang was made to assess damage to cultural heritage.  These included Kidhekhar Lhakhang, Mongar Ngatshang, Dramitsee Lhakhang, Rongthong Ngathshang, Yongphula Lhakhang and Ngatshang, Yangneer Lhakhang and Trashigang Dzong. Several vernacular houses were also visited on way to these sites.
            ',
            'picture'=>'img/bhutan pic 2.jpg'
        ]);
        disasterModel::create( [
            'id'=>102,
                    'title'=>'India Floods 2018
                    ',
                    'explanation'=>'In the context of the devastating Kerala Floods and landslides in India during the month of August 2018, which led to enormous damage and destruction to infrastructure like roads, bridges, power supply and telecommunication networks, paddy fields, private property and assets. Apart from this, Kerala is the home for rich Cultural-Heritage which includes both aspects tangible and intangible heritage. There are ancient temples, Churches, Sacred rivers and associated customs with rivers like boat race, riverfront festivals, Ecological belts, Museums, traditional handloom industries etc. which severely affected in Kerala floods. Kerala Heritage Rescue Initiative (KHRI) launched by International Council on Monuments & Sites, India (ICOMOS) and The International Centre for the Study of the Preservation and Restoration of Cultural Property (ICCROM) brought conservation experts in Kerala together with the help of conservation architect Ms. Surya Prasanth based in Thrissur district in Kerala which was one of the badly affected areas. It was launched to provide emergency response to cultural heritage comprising buildings, archaeological sites, museum collections, archives, libraries, cultural artefacts and intangible heritage damaged by floods by empowering and facilitating the process to recovery as well as to strengthen current existing system with better disaster risk reduction framework and policy as one of the main missions of ICCROM.The state of Kerala was geographically divided into three major parts as North, Central and South and volunteers were assigned to gather data in the respective parts. Also a web based crowdsourcing platform was established along with a Facebook page to collect information on the damage to cultural heritage and map their locations with the help of relevant assessment forms. 
                    ',
                    'picture'=>'img/flood damage 2.jpg'
        ]);
        disasterModel::create( [
            'id'=>103,
                    'title'=>'Post Conflict Recovery in Mosul, Iraq',
                    'explanation'=>'In the aftermath of the horrific events that Mosul and its inhabitants witnessed in the recent past of the recent past, several projects grouped under the UNESCO initiative “Revive the Spirit of Mosul” have been developed on the road to recover its rich heritage. Under this umbrella, ICCROM developed its Heritage Recovery Programme in Mosul, a capacity building programme organized in partnership with UNESCO and the University of Mosul and with the financial support of the Government of the United Arab Emirates and the European Union. With the goal of fostering community reconciliation through the recovery of the environment and rehabilitation of the city’s heritage sites, the programme seeks to ensure long-term sustainable livelihood possibilities for Moslawi people and prosperity for the future. The programme consists of two tracks designed to strengthen the skills of local heritage professionals and craftspeople through training and hands-on technical practice. 
                    The first track, “Building Capacity for Professional Development”, aims to train young building professionals who have a background in architects and civil engineers. Through this programme they will develop valuable skills in value assessment, context analysis, documentation, damage and risk assessment, structural stabilization, recovery planning, implementation and monitoring, as well as adaptive reuse and infrastructure upgradation. The second track, “Building Crafts Revival and Upgrading”, was developed in the spirit of “building back better” to give craft workers the opportunity to enhance their skills while contributing to restoration efforts. 
                  
                    ',
                    'picture'=>'img/mosul pic 1.jpg'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
