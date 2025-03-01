<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctors')->insert([
            ['user_id' => 1, 'specialty_id' => 1, 'biography' => "Avec plus de 10 ans d’expérience en médecine générale, ce médecin accompagne ses patients à chaque étape de leur parcours de santé. Il met un point d’honneur à établir un diagnostic précis et à proposer des traitements adaptés aux besoins spécifiques de chacun. Passionné par la prévention et l’éducation à la santé, il sensibilise ses patients aux bonnes pratiques et aux habitudes de vie saines pour éviter les maladies chroniques.", 'education_level' => 'Doctorat en Médecine'],
            ['user_id' => 2, 'specialty_id' => 1, 'biography' => "Spécialisé en médecine de proximité, ce médecin s’engage à fournir des soins accessibles à tous, notamment dans les zones rurales et les régions éloignées. Il possède une solide expérience dans la prise en charge des maladies courantes et veille à assurer un suivi rigoureux de ses patients. En plus des consultations classiques, il participe à des campagnes de prévention et d’intervention mobile pour atteindre les populations les plus vulnérables.", 'education_level' => 'Doctorat en Médecine'],
            ['user_id' => 3, 'specialty_id' => 1, 'biography' => "Expert en éducation à la santé et en diagnostic précoce, ce médecin accompagne ses patients dans la compréhension et la prévention des maladies. Il est particulièrement attentif aux signaux avant-coureurs de pathologies complexes et travaille en étroite collaboration avec d’autres spécialistes pour une prise en charge optimale. Son approche pédagogique lui permet d’expliquer clairement les traitements et d’encourager une meilleure observance thérapeutique.", 'education_level' => 'Doctorat en Médecine'],
            ['user_id' => 4, 'specialty_id' => 1, 'biography' => "Ce médecin généraliste est particulièrement impliqué dans le suivi des maladies chroniques telles que le diabète, l’hypertension et les affections respiratoires. Son objectif est d’aider ses patients à mieux gérer leur état de santé grâce à des conseils personnalisés et un suivi médical rigoureux. Il prend également à cœur son rôle d’éducateur en santé, en expliquant les bonnes pratiques à adopter pour améliorer la qualité de vie des patients atteints de pathologies de longue durée.", 'education_level' => 'Doctorat en Médecine'],
            ['user_id' => 5, 'specialty_id' => 2, 'biography' => "Spécialiste des maladies cardiovasculaires, cette cardiologue possède une expertise approfondie dans le diagnostic et la prise en charge des pathologies cardiaques, notamment l’hypertension, l’insuffisance cardiaque et les troubles du rythme. Elle met un point d’honneur à sensibiliser ses patients aux facteurs de risque et aux mesures préventives pour maintenir un cœur en bonne santé. Grâce à son approche attentive et bienveillante, elle établit une relation de confiance avec ses patients et les accompagne tout au long de leur traitement.", 'education_level' => 'Spécialisation en Cardiologie'],
            ['user_id' => 6, 'specialty_id' => 3, 'biography' => "Avec plus de 15 ans d’expérience en chirurgie générale, ce chirurgien est reconnu pour son expertise dans la réalisation d’interventions complexes. Il maîtrise un large éventail de techniques chirurgicales, allant de la chirurgie digestive à la chirurgie oncologique. Son approche rigoureuse et méticuleuse lui permet d’assurer des interventions sécurisées avec un suivi post-opératoire minutieux. En parallèle, il participe activement à la formation des jeunes chirurgiens et à l’amélioration des protocoles médicaux en chirurgie.", 'education_level' => 'Spécialisation en Chirurgie Générale'],
            ['user_id' => 7, 'specialty_id' => 4, 'biography' => "Médecin spécialiste en maladies infectieuses, il se consacre à la prévention, au diagnostic et au traitement des infections bactériennes, virales et parasitaires. Il joue un rôle clé dans la lutte contre les maladies émergentes et travaille en étroite collaboration avec les autorités sanitaires pour contenir la propagation des infections. Il est également impliqué dans la recherche sur les traitements innovants contre les infections résistantes aux antibiotiques et veille à sensibiliser le grand public sur les gestes barrières et la vaccination.", 'education_level' => 'Spécialisation en Maladies Infectieuses'],
            ['user_id' => 8, 'specialty_id' => 5, 'biography' => "Pédiatre passionné par le bien-être des enfants, il prend en charge leur suivi médical depuis la naissance jusqu’à l’adolescence. Il est particulièrement investi dans les campagnes de vaccination et la prévention des maladies infantiles. Avec une approche bienveillante et pédagogique, il rassure les parents et leur prodigue des conseils avisés pour assurer le développement et la santé de leurs enfants. Il intervient également dans les écoles pour sensibiliser les jeunes aux bonnes pratiques en matière d’hygiène et de nutrition.", 'education_level' => 'Spécialisation en Pédiatrie'],
            ['user_id' => 9, 'specialty_id' => 6, 'biography' => "Gynécologue-obstétricienne expérimentée, elle accompagne les femmes à toutes les étapes de leur vie, de la puberté à la ménopause. Spécialiste du suivi des grossesses, elle assure un accompagnement attentif des futures mamans en leur apportant conseils et soins personnalisés. Elle réalise également des interventions en chirurgie gynécologique et participe à des campagnes de dépistage des cancers féminins, tels que le cancer du sein et du col de l’utérus.", 'education_level' => 'Spécialisation en Gynécologie-Obstétrique'],
            ['user_id' => 10, 'specialty_id' => 7, 'biography' => "Spécialiste des maladies respiratoires, il prend en charge les patients souffrant d’asthme, de bronchopneumopathie chronique obstructive (BPCO) et d’autres affections pulmonaires. Il propose des traitements adaptés pour améliorer la qualité de vie des patients et prévenir les complications. Sensible aux enjeux environnementaux, il travaille sur les liens entre pollution et maladies respiratoires et participe à des études visant à améliorer les traitements contre ces pathologies.", 'education_level' => 'Spécialisation en Pneumologie'],
            ['user_id' => 11, 'specialty_id' => 8, 'biography' => "Neurologue spécialisé dans le traitement des accidents vasculaires cérébraux (AVC) et de l’épilepsie, il s’efforce d’améliorer la prise en charge des patients atteints de troubles neurologiques. Grâce à une veille constante des avancées médicales, il intègre les nouvelles thérapies et les techniques innovantes pour optimiser les soins. Il met également un point d’honneur à sensibiliser la population aux signes précoces des AVC et aux bonnes pratiques pour préserver la santé cérébrale.", 'education_level' => 'Spécialisation en Neurologie'],
            ['user_id' => 12, 'specialty_id' => 9, 'biography' => "Ophtalmologue reconnu, il se spécialise dans le diagnostic et la chirurgie des affections oculaires, notamment la cataracte et le glaucome. Il met un point d’honneur à offrir une prise en charge adaptée à chaque patient, en utilisant les dernières avancées technologiques en ophtalmologie. Il est également impliqué dans des actions humanitaires pour améliorer l’accès aux soins visuels dans les régions défavorisées.", 'education_level' => 'Spécialisation en Ophtalmologie'],
            ['user_id' => 13, 'specialty_id' => 10, 'biography' => "Dermatologue spécialisée dans les soins de la peau, elle traite un large éventail de pathologies cutanées, des allergies aux maladies tropicales. Elle accompagne ses patients dans la gestion des affections dermatologiques chroniques et propose des traitements esthétiques adaptés. Engagée dans la prévention du cancer de la peau, elle participe à des campagnes de dépistage et sensibilise le public aux dangers de l’exposition excessive au soleil.", 'education_level' => 'Spécialisation en Dermatologie'],
            ['user_id' => 14, 'specialty_id' => 11, 'biography' => "Spécialiste en oto-rhino-laryngologie (ORL), il traite les troubles de l’audition, les infections ORL et les pathologies des voies respiratoires supérieures. Grâce à des équipements de pointe, il assure des diagnostics précis et propose des traitements adaptés à chaque patient. Il intervient également dans les hôpitaux et les écoles pour sensibiliser à la prévention des troubles auditifs et respiratoires.", 'education_level' => 'Spécialisation en ORL'],
            ['user_id' => 15, 'specialty_id' => 12, 'biography' => "Chirurgien orthopédiste spécialisé dans la prise en charge des blessures sportives, il accompagne les athlètes et les patients souffrant de pathologies articulaires. Il réalise des interventions chirurgicales avancées et propose des plans de rééducation adaptés pour favoriser une récupération optimale. Passionné par le sport et la performance physique, il collabore avec des entraîneurs et des kinésithérapeutes pour offrir un suivi complet aux sportifs.", 'education_level' => 'Spécialisation en Chirurgie Orthopédique'],
        ]);
    }
}
