<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homePage(): Response
    {
        $project = [
           [
               "name" => "site mairie", 
               "desc"  => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec elit elit. Ut lacus magna, finibus ut porttitor et, egestas at quam. Vestibulum nec velit ante. Donec elementum sodales nisi, nec sagittis neque pellentesque quis. Vivamus ut ullamcorper lectus. In tempus risus et odio tempus, id tristique ante rhoncus. Vestibulum lacinia elit id mauris blandit volutpat. Nam varius elit id leo condimentum dignissim. Vestibulum pharetra, nisi quis maximus venenatis, nunc purus eleifend nisi, in semper nibh sem sed nunc. Aenean consequat nunc velit.

               Nam libero mi, facilisis nec nunc nec, ullamcorper aliquet arcu. Morbi eget tortor ac lectus porta porttitor pellentesque sagittis arcu. Nulla mi neque, mollis quis tortor accumsan, consectetur tincidunt sem. Pellentesque quis mattis odio. In hac habitasse platea dictumst. Suspendisse euismod, massa non mollis lacinia, elit tellus dapibus purus, fringilla mollis risus turpis ac magna. Donec nec odio sit amet erat porttitor suscipit. Duis dignissim, magna euismod tincidunt aliquet, ante arcu cursus lectus, quis consequat purus arcu ut orci.",
               "date"  => "ddd",
               "icon" => "fas fa-address-card"
           ],
           [
            "name" => "site ocean", 
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec elit elit. Ut lacus magna, finibus ut porttitor et, egestas at quam. Vestibulum nec velit ante. Donec elementum sodales nisi, nec sagittis neque pellentesque quis. Vivamus ut ullamcorper lectus. In tempus risus et odio tempus, id tristique ante rhoncus. Vestibulum lacinia elit id mauris blandit volutpat. Nam varius elit id leo condimentum dignissim. Vestibulum pharetra, nisi quis maximus venenatis, nunc purus eleifend nisi, in semper nibh sem sed nunc. Aenean consequat nunc velit.

            Nam libero mi, facilisis nec nunc nec, ullamcorper aliquet arcu. Morbi eget tortor ac lectus porta porttitor pellentesque sagittis arcu. Nulla mi neque, mollis quis tortor accumsan, consectetur tincidunt sem. Pellentesque quis mattis odio. In hac habitasse platea dictumst. Suspendisse euismod, massa non mollis lacinia, elit tellus dapibus purus, fringilla mollis risus turpis ac magna. Donec nec odio sit amet erat porttitor suscipit. Duis dignissim, magna euismod tincidunt aliquet, ante arcu cursus lectus, quis consequat purus arcu ut orci.",
            "date" => "ddd",
            "icon" => "fas fa-address-card"
        ],
        [
            "name" => "site petit robert", 
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec elit elit. Ut lacus magna, finibus ut porttitor et, egestas at quam. Vestibulum nec velit ante. Donec elementum sodales nisi, nec sagittis neque pellentesque quis. Vivamus ut ullamcorper lectus. In tempus risus et odio tempus, id tristique ante rhoncus. Vestibulum lacinia elit id mauris blandit volutpat. Nam varius elit id leo condimentum dignissim. Vestibulum pharetra, nisi quis maximus venenatis, nunc purus eleifend nisi, in semper nibh sem sed nunc. Aenean consequat nunc velit.

            Nam libero mi, facilisis nec nunc nec, ullamcorper aliquet arcu. Morbi eget tortor ac lectus porta porttitor pellentesque sagittis arcu. Nulla mi neque, mollis quis tortor accumsan, consectetur tincidunt sem. Pellentesque quis mattis odio. In hac habitasse platea dictumst. Suspendisse euismod, massa non mollis lacinia, elit tellus dapibus purus, fringilla mollis risus turpis ac magna. Donec nec odio sit amet erat porttitor suscipit. Duis dignissim, magna euismod tincidunt aliquet, ante arcu cursus lectus, quis consequat purus arcu ut orci.",
            "date" => "ddd",
            "icon" => "fas fa-address-card"
        ]
        ];
        return $this->render('home/index.html.twig', [
            'project' => $project,
        ]);
    }
}
