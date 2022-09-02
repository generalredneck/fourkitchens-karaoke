import recentRequestTwig from './_block-recent-requests.twig';

import recentRequestData from './recent-requests.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Recent Requests' };

export const recentRequests = () => recentRequestTwig(recentRequestData);
