import articleApi from '../api/article';

export default {
    destroy(id) {
        if (confirm('정말 삭제하시겠습니까?')) {
            articleApi.destroy(id);

            document.location.reload();
        }
    }
};