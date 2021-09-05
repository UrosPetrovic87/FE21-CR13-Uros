<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


use App\Entity\Events;

class EventController extends AbstractController
{ 
    ////// show items onmainpage
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $events = $this->getDoctrine()->getRepository(Events::class)->findAll();     
        // dd($todos);
        return $this->render('event/index.html.twig', [
            "events" => $events
        ]);
    }
    ////// creating items 

    #[Route('/create', name: 'create_events')]
    public function create(Request $request): Response
    {
        $events = new events();
        $form = $this->createFormBuilder($events)
        ->add("name", TextType::class, array('attr'=>array("class"=>"form-control input", "style"=>"margin-bottom: 15px")))
        ->add("date_time", DateTimeType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px")))
        ->add("description", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("image", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("capacity", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("email", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("phone", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("address", TextareaType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("url", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("save", SubmitType::class, array('attr'=>array("class"=>"btn-primary", "style"=>"margin-bottom: 15px"),"label"=>"create event"))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $name = $form["name"]->getData();
            $date_time = $form['date_time']->getData();
            $description = $form['description']->getData();
            $image = $form['image']->getData();
            $capacity = $form['capacity']->getData();
            $email = $form['email']->getData();
            $phone = $form['phone']->getData();
            $address = $form['address']->getData();
            $url = $form['url']->getData();


            $events->setName($name);
            $events->setDateTime($date_time);
            $events->setDescription($description);
            $events->setImage($image);
            $events->setCapacity($capacity);
            $events->setEmail($email);
            $events->setPhone($phone);
            $events->setAddress($address);
            $events->setUrl($url);

            $em = $this->getDoctrine()->getManager();

            $em->persist($events);
            $em->flush();

            $this->addFlash('notice', 'Event Added');

            return $this->redirectToRoute('index');
        }

        return $this->render('event/create.html.twig', [
            "form" => $form->createView()
        ]);
    }
   ////// displaing details 
    #[Route('/details/{id}', name: 'details')]
    public function details($id): Response
    {
        $events = $this->getDoctrine()->getRepository(Events::class)->find($id);
        return $this->render('event/details.html.twig', [
            "events" => $events
        ]);
    }
   ////// Editing items 

    #[Route('/edit/{id}', name: 'edit')]
    public function edit($id, Request $request): Response
    {
        $events = $this->getDoctrine()->getRepository(Events::class)->find($id);
       
        $form = $this->createFormBuilder($events)
        ->add("name", TextType::class, array('attr'=>array("class"=>"form-control input", "style"=>"margin-bottom: 15px")))
        ->add("date_time", DateTimeType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px")))
        ->add("description", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("image", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("capacity", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("email", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("phone", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("address", TextareaType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("url", TextType::class, array('attr'=>array("class"=>"form-control", "style"=>"margin-bottom: 15px","id"=>"demo")))
        ->add("save", SubmitType::class, array('attr'=>array("class"=>"btn-primary", "style"=>"margin-bottom: 15px"),"label"=>"Edit event"))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $name = $form["name"]->getData();
            $date_time = $form['date_time']->getData();
            $description = $form['description']->getData();
            $image = $form['image']->getData();
            $capacity = $form['capacity']->getData();
            $email = $form['email']->getData();
            $phone = $form['phone']->getData();
            $address = $form['address']->getData();
            $url = $form['url']->getData();

            $events->setName($name);
            $events->setDateTime($date_time);
            $events->setDescription($description);
            $events->setImage($image);
            $events->setCapacity($capacity);
            $events->setEmail($email);
            $events->setPhone($phone);
            $events->setAddress($address);
            $events->setUrl($url);

            $em = $this->getDoctrine()->getManager();

            $em->persist($events);
            $em->flush();

            $this->addFlash('notice', 'Event Edited');

            return $this->redirectToRoute('index');
        }

        return $this->render('event/edit.html.twig', [
            "form" => $form->createView()
        ]);
    }

   ////// Editing items 

    #[Route('/delete/{id}', name: 'delete')]
    public function delete($id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Events::class)->find($id);
        $em->remove($events);
        $em->flush();

        $this->addFlash('notice', "Event Removed");
        return $this->redirectToRoute("index");
    }
}
