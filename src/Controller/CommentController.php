<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[Route('/comment')]
#[IsGranted('ROLE_USER')]
class CommentController extends AbstractController
{

    #[Route('/new', name: 'app_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $content = $request->request->get('content');
        $postid = $request->request->get('postid');
        $post = $entityManager->getRepository(Post::class)->find($postid);
        $comment = new Comment();
        $comment->setUser($this->getUser());
        $comment->setContent($content);
        $comment->setPost($post);
        $entityManager->persist($comment);
        $entityManager->flush();
        return $this->redirectToRoute('app_post_index');
    }


    #[Route('/{id}/edit', name: 'app_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
    {
        if ($comment->getUser() != $this->getUser()) {
            throw $this->createAccessDeniedException('Tu n\'es pas l\'auteur de ce commentaire');
        }
        $content = $request->request->get('content');
        $comment->setContent($content);
        $entityManager->persist($comment);
        $entityManager->flush();
        return $this->redirectToRoute('app_post_index');
    }

    #[Route('/{id}', name: 'app_comment_delete', methods: ['POST'])]
    public function delete(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
    {
        if ($comment->getUser() != $this->getUser()) {
            throw $this->createAccessDeniedException('Tu n\'es pas l\'auteur de ce commentaire');
        }
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($comment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_post_index');
    }
}
