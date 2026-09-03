<?php

declare(strict_types=1);

namespace Runalyze\Bundle\GlossaryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    private function renderCorrectView(string $view, Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->render($view, [
                'extends' => 'base_logged_in.twig',
                'urlClass' => ''
            ]);
        }

        return $this->render($view, [
            'extends' => 'base_not_logged_in.html.twig',
            'urlClass' => 'class="external"'
        ]);
    }

    /**
     * @Route("/", name="glossary-index")
     */
    public function indexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/overview.html.twig', $request);
    }

    /**
     * @Route("/atl", name="glossary-atl")
     */
    public function atlAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/atl.html.twig', $request);
    }

    /**
     * @Route("/ctl", name="glossary-ctl")
     */
    public function ctlAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/ctl.html.twig', $request);
    }

    /**
     * @Route("/tsb", name="glossary-tsb")
     */
    public function tsbAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/tsb.html.twig', $request);
    }

    /**
     * @Route("/easy-trimp", name="glossary-easy-trimp")
     */
    public function easyTrimpAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/easy_trimp.html.twig', $request);
    }

    /**
     * @Route("/heat-index", name="glossary-heat-index")
     */
    public function heatIndexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/heat_index.html.twig', $request);
    }

    /**
     * @Route("/hrv", name="glossary-hrv")
     */
    public function hrvAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/hrv.html.twig', $request);
    }

    /**
     * @Route("/marathon-shape", name="glossary-marathon-shape")
     */
    public function marathonShapeAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/marathon_shape.html.twig', $request);
    }

    /**
     * @Route("/maximum-heart-rate", name="glossary-maximum-heart-rate")
     */
    public function maximumHeartRateAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/maximum_heart_rate.html.twig', $request);
    }

    /**
     * @Route("/monotony", name="glossary-monotony")
     */
    public function monotonyAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/monotony.html.twig', $request);
    }

    /**
     * @Route("/performance-condition", name="glossary-performance-condition")
     */
    public function performanceConditionAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/performance_condition.html.twig', $request);
    }

    /**
     * @Route("/resting-heart-rate", name="glossary-resting-heart-rate")
     */
    public function restingHeartRateAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/resting_heart_rate.html.twig', $request);
    }

    /**
     * @Route("/rpe", name="glossary-rpe")
     */
    public function rpeAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/rpe.html.twig', $request);
    }

    /**
     * @Route("/swolf", name="glossary-swolf")
     */
    public function swolfAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/swolf.html.twig', $request);
    }

    /**
     * @Route("/training-effect", name="glossary-training-effect")
     */
    public function trainingEffectAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_effect.html.twig', $request);
    }

    /**
     * @Route("/training-strain", name="glossary-training-strain")
     */
    public function trainingStrainAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_strain.html.twig', $request);
    }

    /**
     * @Route("/trimp", name="glossary-trimp")
     */
    public function trimpAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/trimp.html.twig', $request);
    }

    /**
     * @Route("/vo2max", name="glossary-vo2max")
     */
    public function vo2maxAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vo2max.html.twig', $request);
    }

    /**
     * @Route("/windchill", name="glossary-windchill")
     */
    public function windchillAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/windchill.html.twig', $request);
    }

    /**
     * @Route("/groundcontact", name="glossary-groundcontact")
     */
    public function groundcontactAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/groundcontact.html.twig', $request);
    }

    /**
     * @Route("/groundcontact-time-balance", name="glossary-groundcontact-time-balance")
     */
    public function groundcontactTimeBalanceAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/groundcontact_balance.html.twig', $request);
    }

    /**
     * @Route("/vertical-ratio", name="glossary-vertical-ratio")
     */
    public function verticalRatioAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vertical_ratio.html.twig', $request);
    }

    /**
     * @Route("/vertical-oscillation", name="glossary-vertical-oscillation")
     */
    public function verticalOscillationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/vertical_oscillation.html.twig', $request);
    }

    /**
     * @Route("/stride-length", name="glossary-stride-length")
     */
    public function strideLengthAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/stride_length.html.twig', $request);
    }

    /**
     * @Route("/cadence", name="glossary-cadence")
     */
    public function cadenceAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/cadence.html.twig', $request);
    }

    /**
     * @Route("/running-effectiveness", name="glossary-running-effectiveness")
     */
    public function runningEffectivenessAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/running_effectiveness.html.twig', $request);
    }

    /**
     * @Route("/efficiency-index", name="glossary-efficiency-index")
     */
    public function efficiencyIndexAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/efficiency_index.html.twig', $request);
    }

    /**
     * @Route("/self-evaluation", name="glossary-self-evaluation")
     */
    public function selfEvaluationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/self_evaluation.html.twig', $request);
    }

    /**
     * @Route("/run-dynamics", name="glossary-run-dynamics")
     */
    public function runningDynamicsAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/running_dynamics.html.twig', $request);
    }

    /**
     * @Route("/respiration", name="glossary-respiration")
     */
    public function respirationAction(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/respiration.html.twig', $request);
    }

    /**
     * @Route("/training_load_peak", name="glossary-training_load_peak")
     */
    public function trainingLoadPeak(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/training_load_peak.html.twig', $request);
    }

    /**
     * @Route("/detection_run_walk", name="glossary-detection_run_walk")
     */
    public function detectionRunWalk(Request $request): Response
    {
        return $this->renderCorrectView('@Glossary/topics/detection_run_walk.html.twig', $request);
    }
}
