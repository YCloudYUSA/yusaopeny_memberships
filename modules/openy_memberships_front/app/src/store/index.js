import mutations from '../mutations'
import actions from '../actions'
const defaultSteps = ['BranchSelectorHome', 'Family', 'Results', 'Summary']
export default {
    state: {
      step: 0,
      steps: defaultSteps,
      location: null,
      family: {},
      familyTotalCount: 0,
      product: null,
      keepCart: true,
      members: [],
      income: 0,
      billing: {}
    },
    mutations,
    actions
}
