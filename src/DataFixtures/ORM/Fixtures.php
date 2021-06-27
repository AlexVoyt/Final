<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager ;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $author = new Author();
        $author
            ->setName('Alexey Voytenko')
            ->setTitle('Student')
            ->setUsername('Username')
            ->setCompany('FEFU')
            ->setShortBio('Very short bio')
            ->setPhone('888999000')
            ->setFacebook('None')
            ->setTwitter('None')
            ->setGithub('My github');

        $manager->persist($author);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('YOOOOOO FIRST POOOOOOOOST')
            ->setSlug('Yep')
            ->setDescription('Nice')
            ->setBody('BOdy of first post')
            ->setAuthor($author);
        $manager->persist($blogPost);
 
        $blogPost2 = new BlogPost();
        $blogPost2
            ->setTitle('Second post')
            ->setSlug('second-post')
            ->setDescription('All by me, yep.')
            ->setBody('Thats all, folks.')
            ->setAuthor($author);
        $manager->persist($blogPost2);

        $blogPost3 = new BlogPost();
        $blogPost3
            ->setTitle('Example of very long body')
            ->setSlug('long-post')
            ->setDescription('Example of very long body.')
            ->setBody('

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta, dui et ultricies iaculis, tellus lacus elementum ex, at sodales est dui quis augue. Vestibulum aliquam diam ut dolor mattis mattis. Curabitur ultricies quis mauris a vestibulum. Suspendisse potenti. Nam in consequat risus. In quis mi rutrum, porta nulla id, gravida orci. Quisque ac viverra magna, non vehicula urna. Vivamus at mi ac est tincidunt varius sit amet sed massa. Aliquam vulputate diam non libero faucibus efficitur. Etiam eget scelerisque tortor, non luctus metus. Mauris pulvinar euismod mauris, ut tincidunt urna tristique eget. Suspendisse at ligula elementum, tempus sem et, gravida ante. Sed ipsum mi, semper sed consectetur ac, consectetur sed nulla. Fusce mi dolor, auctor nec imperdiet finibus, tincidunt a lorem. Morbi suscipit purus nec justo consectetur accumsan. Ut lobortis est ac lorem blandit, id faucibus risus vulputate.
            
            Integer quis sagittis orci. Nulla vestibulum, quam et finibus egestas, orci lectus sagittis nisl, at sollicitudin orci libero at mauris. Ut posuere dolor risus, sit amet tempor mauris consectetur in. Curabitur at metus orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec rutrum libero ut euismod condimentum. Fusce et ultrices erat. Donec tincidunt mattis neque ac ultricies. Nulla convallis quam vel ligula finibus sodales. Curabitur et est sit amet libero laoreet congue. Morbi vestibulum pharetra aliquet. Nam volutpat, ligula ut blandit accumsan, nulla ante dictum erat, vel volutpat erat justo vitae massa. Suspendisse tristique felis et augue ultrices mollis ut et justo. Sed dapibus nibh nec metus lacinia, vel pulvinar metus feugiat. Nullam in accumsan metus. Curabitur luctus vulputate velit ut luctus.
            
            Curabitur et dignissim nibh, a posuere leo. Proin fermentum turpis sed arcu varius laoreet. Aliquam ac enim vitae nisi dignissim imperdiet eget in turpis. Aenean et ultricies magna. Nam arcu lacus, convallis et hendrerit ut, rhoncus at eros. Integer non fermentum neque. Vestibulum purus risus, consequat ut facilisis et, molestie ut felis. Sed porta a velit vitae hendrerit.
            
            Vivamus ac risus fermentum, maximus ipsum at, lacinia dui. Aenean euismod vestibulum turpis sit amet placerat. Donec blandit ipsum vitae ipsum consequat, pretium hendrerit diam aliquam. Vestibulum mattis ante ut tellus posuere tempor lacinia vitae turpis. Quisque et purus ultrices, laoreet nunc quis, aliquet orci. Ut iaculis ac nisl id maximus. Fusce vehicula felis vel varius maximus. Pellentesque et convallis magna. Ut varius mollis mattis. Duis id iaculis dui. Etiam luctus eu nunc sit amet commodo. Vestibulum egestas vitae libero id feugiat. Suspendisse in tortor quis odio sagittis ultrices eu vitae ante. Nullam venenatis mattis leo, eu tristique eros semper sed. Curabitur a scelerisque purus.
            
            Mauris in magna porttitor lectus interdum sagittis id pellentesque magna. Pellentesque tempus urna nec felis ornare sagittis. Mauris eu ante quis nisi euismod tempor quis ac nunc. In dictum, tortor at consequat luctus, augue ante placerat sapien, ac molestie nulla est nec risus. Mauris erat erat, egestas eget semper eu, sagittis vel ante. Mauris orci massa, porttitor facilisis cursus nec, ornare tempus ipsum. Fusce ut purus ligula. Aliquam sagittis nulla eget diam posuere malesuada. Maecenas convallis luctus eros, eu venenatis metus fringilla eu. Etiam laoreet pulvinar consectetur. Etiam cursus tincidunt nisi sit amet molestie. Etiam scelerisque, sapien tincidunt finibus consequat, leo libero pretium lacus, sed sagittis velit nulla et lectus. Etiam varius neque porttitor, ullamcorper mi a, interdum dolor. Praesent nibh ipsum, imperdiet vitae finibus nec, tempus at lectus. Integer pellentesque lobortis sem, eget porta nulla luctus id. ')
            ->setAuthor($author);
        $manager->persist($blogPost3);
        $manager->flush();

    }
}