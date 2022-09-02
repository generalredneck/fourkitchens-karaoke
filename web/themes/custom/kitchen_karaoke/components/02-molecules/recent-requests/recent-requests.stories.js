import recentRequestTwig from './_block-recent-requests.twig';

import recentRequestData from './recent-requests.yml';

/**
 * Storybook Definition.
 */
export default {
  title: 'Molecules/Recent Requests',
  parameters: {
    layout: 'fullscreen',
  },
  argTypes: {
    title_prefix: {
      name: 'Title Prefix',
      type: 'string',
      defaultValue: recentRequestData.title_prefix,
    },
    label: {
      name: 'Label',
      type: 'string',
      defaultValue: recentRequestData.label,
    },
    content: {
      name: 'Recent Requests Content',
      type: 'string',
      defaultValue: recentRequestData.content,
    },
    title_suffix: {
      name: 'Title Suffix',
      type: 'string',
      defaultValue: recentRequestData.title_suffix,
    },
  },
};

export const recentRequests = () => recentRequestTwig(recentRequestData);
