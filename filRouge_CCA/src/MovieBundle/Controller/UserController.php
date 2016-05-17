<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\User;
use MovieBundle\Form\UserType;

/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $pseudo = $usr->getUsername();

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('MovieBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
            'pseudo' => $pseudo,
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('MovieBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{username}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser(); // On récupère les infos de l'utilisateur courant
        $pseudo = $usr->getUsername();

       if($user->hasRole("ROLE_MODERATEUR"))
        {
            $modo="ROLE_MODERATEUR";
            $deleteForm = $this->createDeleteForm($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->render('user/show.html.twig', array(
            'user' => $user,
            'modo' => $modo,
            'delete_form' => $deleteForm->createView(),
            'pseudo' => $pseudo,
        ));
        }
        elseif($user->hasRole("ROLE_ADMIN"))
        {
            $modo="ROLE_ADMIN";
            $deleteForm = $this->createDeleteForm($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->render('user/show.html.twig', array(
            'user' => $user,
            'modo' => $modo,
            'delete_form' => $deleteForm->createView(),
            'pseudo' => $pseudo,
        ));
        }
        elseif($user->hasRole("ROLE_SUPER_ADMIN"))
        {
            $modo="ROLE_SUPER_ADMIN";
            $deleteForm = $this->createDeleteForm($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->render('user/show.html.twig', array(
            'user' => $user,
            'modo' => $modo,
            'delete_form' => $deleteForm->createView(),
            'pseudo' => $pseudo,
        ));
        }
        else
        {
            $modo="";
            $deleteForm = $this->createDeleteForm($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->render('user/show.html.twig', array(
            'user' => $user,
            'modo' => $modo,
            'delete_form' => $deleteForm->createView(),
            'pseudo' => $pseudo,
        ));
        } 
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{username}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {

        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('MovieBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('username' => $user->getUsername()));
        }

        $usr = $this->get('security.token_storage')->getToken()->getUser();// On récupère les infos de l'utilisateur courant
        $pseudo = $usr->getUsername();

        if($pseudo === $user->getUsername())
        {
            return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
        }
        else
        {
        return $this->redirectToRoute('user_index');
        }
    }

    /**
     * Displays a form to promote an existing User entity.
     *
     * @Route("/{username}/promote", name="user_promote")
     * @Method("GET")
     */
    public function promoteAction(User $user)
    {
        $user->addRole('ROLE_MODERATEUR');
        $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

        return $this->redirectToRoute('user_show', array('username' => $user->getUsername())); 

    }

    /**
     * Displays a form to promote an existing User entity.
     *
     * @Route("/{username}/unpromote", name="user_unpromote")
     * @Method("GET")
     */
    public function unpromoteAction(User $user)
    {
        $user->removeRole('ROLE_MODERATEUR');
        $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

        return $this->redirectToRoute('user_show', array('username' => $user->getUsername())); 

    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{username}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('username' => $user->getUsername())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
