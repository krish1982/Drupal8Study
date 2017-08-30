<?php

namespace Drupal\workflows\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an Workflow type annotation object.
 *
 * Plugin Namespace: Plugin\WorkflowType
 *
 * For a working example, see \Drupal\content_moderation\Plugin\Workflow\ContentModerate
 *
 * @see \Drupal\workflows\WorkflowTypeInterface
 * @see \Drupal\workflows\WorkflowManager
 * @see plugin_api
 *
 * @Annotation
 *
 * @internal
 *   The workflow system is currently experimental and should only be leveraged
 *   by experimental modules and development releases of contributed modules.
 */
class WorkflowType extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the workflow.
   *
   * Describes how the plugin is used to apply a workflow to something.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label = '';

  /**
   * States required to exist.
   *
   * Normally supplied by WorkflowType::defaultConfiguration().
   *
   * @var array
   */
  public $required_states = [];

  /**
   * A list of optional form classes implementing PluginFormInterface.
   *
   * Forms which will be used for the workflow UI are 'configure', 'state' and
   * 'transition'.
   *
   * @see \Drupal\Core\Plugin\PluginWithFormsInterface
   * @see \Drupal\Core\Plugin\PluginFormInterface
   * @see \Drupal\workflows\Plugin\WorkflowTypeConfigureFormBase
   * @see \Drupal\workflows\Plugin\WorkflowTypeStateFormBase
   * @see \Drupal\workflows\Plugin\WorkflowTypeTransitionFormBase
   * @see \Drupal\workflows\WorkflowTypeInterface::PLUGIN_FORM_KEY
   * @see \Drupal\workflows\StateInterface::PLUGIN_FORM_KEY
   * @see \Drupal\workflows\TransitionInterface::PLUGIN_FORM_KEY
   *
   * @var array
   */
  public $forms = [];

}
